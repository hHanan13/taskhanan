<?php

namespace App\Http\Livewire;

use App\Http\Requests\Request;
use App\Models\alboum;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;


class Alboumlive extends Component
{
    use WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $alboum, $created_at, $uid, $image_path, $image;

    public function render()
    {
        $this->data['alboums'] = alboum::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = alboum::count();
        return view('livewire.alboums.alboum');
    }

    public function save()
    {
        $this->validate([

            'name_en' => 'required|string',
            'image' => 'required',

        ]);

        $alboum = alboum::create([

            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/alboums/' . $filename));
            $alboum->image = $filename;
            $alboum->save();
        }


        if ($alboum) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        session()->flash('message', 'Alboums Created Successfully.');

    }

    public function edit($id)
    {

        $alboum = alboum::find($id);

        if ($alboum) {

            $this->getBrand($alboum);

        }

    }

    public function update()
    {
        $this->validate([

            'name_en' => 'required|string',

        ]);

        $alboum = alboum::find($this->uid);

        $alboum->update([

            'name_en' => $this->name_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($image = request()->hasFile('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $alboum['image'] = "$profileImage";
        }else{
            unset($alboum['image']);
        }
       

        if ($alboum) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
        session()->flash('message', 'Alboums Updated Successfully.');

    }

    public function show($id)
    {
        $alboum = alboum::find($this->uid);

        if ($alboum) {

            $this->getBrand($alboum);

        }

    }

    public function getBrand($alboum)
    {
        $this->alboum = $alboum;
        $this->name_en = $this->alboum['name_en'];
        $this->status = $this->alboum['status'];
        $this->image_path = $this->alboum['image_path'];
        $this->image = $this->alboum['image'];


        $this->created_at = isset($this->alboum['created_at']) ? Carbon::parse($this->alboum['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->alboum['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $alboum = alboum::find($id);

        if ($alboum) {

            $this->getBrand($alboum);

        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $alboum = alboum::find($id);

        if ($alboum) {

            $this->getBrand($alboum);

        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }


    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();

    }

    public function resetInput()
    {

        $this->name_en = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';

    }

    public function destroy($id)
    {
        $alboum = alboum::find($id);

        if ($alboum->image) {

            if (File::exists('images/alboums/' . $alboum->image)) {

                unlink('images/alboums/' . $alboum->image);
            }
        }
        if ($alboum) {
            $alboum->delete();
            flash(trans('lang.deleted_sucessfully'));

        }
    }
    public function activateBrand($id)
    {
        // foreach ($client as $clientId)
        $alboum =alboum::findOrNew($id);
        if($alboum->status == 0 ){
            $alboum->update(['status' => "1"]);
        }
        else{
            $alboum->update(['status' => "0"]);
        }
    }
}
