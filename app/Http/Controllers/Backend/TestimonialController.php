<?php



namespace App\Http\Controllers\Backend;
use App\Models\testimonial;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoretestimonialRequest;
use App\Http\Requests\UpdatetestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = testimonial::latest('id')
        ->select(['id', 'client_name','client_name_slug', 'client_designation', 'client_message', 'client_image', 'updated_at'])->paginate(100);

        return view('backend.pages.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestimonialRequest $request)
    {
        //dd($request->all());
        $testimonial = testimonial::create([
            'client_name' => $request->client_name,
            'client_name_slug' => Str::slug($request->client_name),
            'client_designation' => $request->client_designation,
            'client_message' => $request->client_message,
        ]);

        $this->image_upload($request, $testimonial->id);

        // Toastr::success('Data Stored Successfully!!');
        return redirect()->route('testimonial.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $testimonial = testimonial::where('client_name_slug', $slug)->first();
        return view('backend.pages.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestimonialRequest $request, $slug)
    {
        $testimonial = testimonial::where('client_name_slug', $slug)->first();
        $testimonial->update([
            'client_name' => $request->client_name,
            'client_name_slug' => Str::slug($request->client_name),
            'client_designation' => $request->client_designation,
            'client_message' => $request->client_message,
            'is_active' => $request->filled('is_active')
        ]);

        $this->image_upload($request, $testimonial->id);

        // Toastr::success('Data Updated Successfully!!');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $testimonial = testimonial::where('client_name_slug', $slug)->first();

        if($testimonial->client_image){
            $photo_location = 'upload/testimonials/'.$testimonial->client_image;
            unlink($photo_location);
        }

        $testimonial->delete();

        // Toastr::success('Data Deleted Successfully!!');
        return redirect()->route('testimonial.index');

    }

    public function image_upload($request, $item_id)
    {

        $testimonial = testimonial::findorFail($item_id);
        //dd($request->all(), $testimonial, $request->hasFile('client_image'));
        if ($request->hasFile('client_image')) {
            if ($testimonial->client_image != 'default-client.jpg') {
                //delete old photo
                $photo_location = 'public/upload/testimonials/';
                $old_photo_location = $photo_location . $testimonial->client_image;
                unlink(base_path($old_photo_location));
            }
            $photo_location = 'public/upload/testimonials/';
            $uploaded_photo = $request->file('client_image');
            $new_photo_name = $testimonial->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_location . $new_photo_name;
            Image::make($uploaded_photo)->resize(105,105)->save(base_path($new_photo_location), 40);
            //$user = User::find($category->id);
            $check = $testimonial->update([
                'client_image' => $new_photo_name,
            ]);
        }
    }
}

