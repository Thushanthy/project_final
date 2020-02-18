<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use DB;
use Session;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reviews = Review::all();

        return view('reviews.index', compact('reviews'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'review' => 'required',
            'parking_id' => 'required'
        ]);

        $review = new Review([
            'driver_id' => Session::get('driverid'),
            'parking_space_id' => $request->parking_id,
            'review' => $request->review
        ]);
        $review->save();
        return redirect('/logindriver')->with('success', 'Review saved!');
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
    public function edit($id)
    {
         $review = Review::find($id);
        return view('crud.reviews.create')->with('parking_id',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $review = Review::find($id);
        $review->first_name =  $request->get('first_name');
        $review->last_name = $request->get('last_name');
        $review->email = $request->get('email');
        $review->job_title = $request->get('job_title');
        $review->city = $request->get('city');
        $review->country = $request->get('country');
        $review->save();

        return redirect('/reviews')->with('success', 'Review updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted!');
    }

    public function searchforreview(Request $request){
        if($request->ajax()){
            $output='';
            $reviews = DB::table('parking_spaces')->join('reviews','parking_spaces.id','=','reviews.parking_space_id')->where('name','LIKE','%'.$request->q.'%')->orWhere('address','LIKE','%'.$request->q.'%')->get();
            if($reviews){
                foreach($reviews as $review){
                    $output .= '<tr>
                            <td>'.$review->driver_id.'</td>
                            <td>'.$review->name.'</td>
                            <td>'.$review->address.'</td>
                            <td>'.$review->review.'</td>
                            <td><form action="'.route('reviews.destroy', $review->id).'" method="post">
                            <input type="hidden" name="_token" value="'.csrf_token().'">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Remove</button>
                            </form></td>
                            </tr>';
                }

                return Response($output);
            }
        }
    }
}
