<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Setting extends Component
{
    use WithFileUploads;

    public $about_us_page = [
        'about_us_page_id'=>NULL ,
        'about_us_page_content'=> NULL
    ];
    public $about_us_filter;
    public $about_us_data=[];
    public $about_us = [
        'about_us_id'=> NULL,
        'about_us_logo'=>NULL,
        'about_us_header'=>'',
        'about_us_content'=> NULL
    ];

    public $academic_filter;
    public $academic_data=[];
    public $academic = [
        'academic_id'=> NULL,
        'academic_logo'=>NULL,
        'academic_header'=>'',
        'academic_content'=> NULL
    ];

    public $admission_filter;
    public $admission_data=[];
    public $admission = [
        'admission_id'=> NULL,
        'admission_logo'=>NULL,
        'admission_header'=>'',
        'admission_content'=> NULL
    ];

    public $faq_filter;
    public $faq_data = [];
    public $faq = [
        'faq_id'=> NULL,
        'faq_question'=>'',
        'faq_answer'=>'',
        'faq_order'=> NULL
    ];

    public $faculty_filter;
    public $faculty_data = [];
    public $faculty = [
        'faculty_id' => NULL,
        'faculty_picture' => NULL,
        'faculty_fullname' => NULL,
        'faculty_position' => NULL,
        'faculty_title' => NULL,
        'faculty_description' => NULL,
        'faculty_order' => NULL
    ];

   

    public $carousel_filter;
    public $carousel_data = [];
    public $edit_carousel_data;
    public $carousel_image_id ;
    public $carousel_id;
    public $carousel_header_title;
    public $carousel_content_image;
    public $carousel_paragraph_paragraph;

    public $system_asset =[
        'system_asset_id'  => NULL,
        'system_asset_name'  => NULL,
        'system_asset_logo'  => NULL,
    ];
    public $system_asset_logo ;
      

    public function booted(Request $request){
        $this->user_details = $request->session()->all();
        if(!isset($this->user_details['user_id'])){
            return redirect('/login');
        }else{
            $user_status = DB::table('users as u')
            ->select('u.user_status_id','us.user_status_details')
            ->join('user_status as us', 'u.user_status_id', '=', 'us.user_status_id')
            ->where('user_id','=', $this->user_details['user_id'])
            ->first();
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'deleted' ){
            return redirect('/deleted');
        }

        if(isset($user_status->user_status_details) && $user_status->user_status_details == 'inactive' ){
            return redirect('/inactive');
        }
    }

    public function hydrate(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] || $this->access_role['R'] || $this->access_role['U'] || $this->access_role['D']){
            self::update_data();
        }
    }

    public function update_data(){
        $this->faq_data = DB::table('faq as f')
            ->select('*')
            ->orderBy('faq_order')
            ->get()
            ->toArray();
        $this->carousel_data = DB::table('carousel as c')
            ->select('*')
            ->orderBy('carousel_order')
            ->get()
            ->toArray();

        $this->about_us_data = DB::table('about_us')
            ->select('*')
            ->orderBy('about_us_order')
            ->get()
            ->toArray();

        $this->academic_data = DB::table('academics as a')
            ->select('*')
            ->orderBy('academic_order')
            ->get()
            ->toArray();

        $this->admission_data = DB::table('admissions as a')
            ->select('*')
            ->orderBy('admission_order')
            ->get()
            ->toArray();

        $this->faculty_data = DB::table('faculty')
            ->select('*')
            ->orderBy('faculty_order')
            ->get()
            ->toArray();
    }

    public function mount(){
        $this->title = 'Setting';

        // faq
        $this->faq_filter = [
            '#'=> true,
            'Question'=> true,
            'Answer'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        // carousel 
        $this->carousel_filter = [
            '#'=> true,
            'Carousel content'=> true,
            'Paragraphs'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        // about_us
        $this->about_us_filter = [
            '#'=> true,
            'Logo'=> true,
            'Header'=> true,
            'Content'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        // programs
        $this->academic_filter = [
            '#'=> true,
            'Logo'=> true,
            'Header'=> true,
            'Content'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        $this->admission_filter = [
            '#'=> true,
            'Logo'=> true,
            'Header'=> true,
            'Content'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        $this->faculty_filter = [
            '#'=> true,
            'Image'=> true,
            'Fullname'=> true,
            'Position'=> true,
            'Title'=> true,
            'Content'=> true,
            'Order'=> true,
            'Action'=> true,
        ];

        self::update_data();
        $system_assets = DB::table('system_assets')
            ->first();
        $this->system_asset =[
            'system_asset_id'  => $system_assets->system_asset_id,
            'system_asset_name'  => $system_assets->system_asset_name,
            'system_asset_logo'  => NULL
        ];
        $this->system_asset_logo = $system_assets->system_asset_logo;

    }

    public function render()
    {
        return view('livewire.admin.setting.setting',[
            ])
            ->layout('layouts.admin',[
                'title'=>$this->title]);
    }


    // faq
    public function add_faq(){
        $this->faq = [
            'faq_id'=> NULL,
            'faq_question'=>'',
            'faq_answer'=>'',
            'faq_order'=> NULL
        ];
        $this->dispatchBrowserEvent('openModal','AddFAQModal');
    }
    public function save_add_faq(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->faq['faq_question'])<=0){
                return;
            }
            if(strlen($this->faq['faq_answer'])<=0){
                return;
            }

            $current_order = DB::table('faq as f')
            ->select(DB::raw('count(*) as current_order'))
            ->first();

            if(DB::table('faq')
                ->insert([
                'faq_id' => NULL,
                'faq_question' => $this->faq['faq_question'],
                'faq_answer' => $this->faq['faq_answer'],
                'faq_order' =>($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);

                $this->faq = [
                    'faq_id'=> NULL,
                    'faq_question'=>'',
                    'faq_answer'=>'',
                    'faq_order'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','AddFAQModal');
            }
        }
    }
    public function active_page($active_page){}

    public function edit_faq($faq_id){

        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $this->faq = DB::table('faq as f')
                ->select('*')
                ->where('f.faq_id','=',$faq_id)
                ->first();

                
            $this->dispatchBrowserEvent('openModal','EditFAQModal');
            $this->faq = [
                'faq_id'=> $this->faq->faq_id,
                'faq_question'=>$this->faq->faq_question,
                'faq_answer'=>$this->faq->faq_answer,
                'faq_order'=> NULL
            ];
        }
    }
    public function save_edit_faq($faq_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
          
            if(DB::table('faq as f')
                ->where('faq_id','=',$faq_id)
                ->update([
                    'faq_question' => $this->faq['faq_question'],
                    'faq_answer' => $this->faq['faq_answer']
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully saved!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }

            $this->faq = [
                'faq_id'=> NULL,
                'faq_question'=>'',
                'faq_answer'=>'',
                'faq_order'=> NULL
            ];

            self::update_data();
            $this->dispatchBrowserEvent('openModal','EditFAQModal');
        }
    }
    public function delete_faq($faq_id){
        if(
            
            $this->faq = DB::table('faq as f')
            ->select('*')
            ->where('f.faq_id','=',$faq_id)
            ->first()
            ){   
                
         

            $this->faq = [
                'faq_id'=> $this->faq->faq_id,
                'faq_question'=>$this->faq->faq_question,
                'faq_answer'=>$this->faq->faq_answer,
                'faq_order'=> NULL
            ];
            $this->dispatchBrowserEvent('openModal','DeleteFAQModal');
 
            $faq_data = DB::table('faq as f')
            ->select('*')
            ->orderBy('faq_order')
            ->get()
            ->toArray();
            foreach ($faq_data as $key => $value) {
                DB::table('faq')
                    ->where('faq_id','=', $value->faq_id)
                    ->update(['faq_order'=>($key+1)]);
            }
            self::update_data(); 
        }
    }
    public function confirm_delete_faq($faq_id){
        if(
            DB::table('faq')
            ->where('faq_id','=',$faq_id)
            ->delete()
            ){
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'Successfully deleted!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
            $this->dispatchBrowserEvent('openModal','DeleteFAQModal');
            $faq_data = DB::table('faq as f')
            ->select('*')
            ->orderBy('faq_order')
            ->get()
            ->toArray();
            foreach ($faq_data as $key => $value) {
                DB::table('faq')
                    ->where('faq_id','=', $value->faq_id)
                    ->update(['faq_order'=>($key+1)]);
            }
            self::update_data(); 
        }
    }
    public function move_up_faq($faq_order){
        // get up
        $current = DB::table('faq')
        ->where('faq_order','=',$faq_order)
        ->first();
     
        if($up_data = DB::table('faq')
            ->where('faq_order','<',$current->faq_order)
            ->orderBy('faq_order','desc')
            ->first()){
            DB::table('faq')
                ->where('faq_id','=',$current->faq_id)
                ->update(['faq_order'=>$up_data->faq_order]);

            DB::table('faq')
                ->where('faq_id','=',$up_data->faq_id)
                ->update(['faq_order'=>$current->faq_order]);

            self::update_data();
        }
    }
    public function move_down_faq($faq_order){
        // get up
        $current = DB::table('faq')
        ->where('faq_order','=',$faq_order)
        ->first();
        
        if($down_data = DB::table('faq')
        ->where('faq_order','>',$current->faq_order)
        ->orderBy('faq_order')
        ->first()){
            DB::table('faq')
                ->where('faq_id','=',$current->faq_id)
                ->update(['faq_order'=>$down_data->faq_order]);

            DB::table('faq')
                ->where('faq_id','=',$down_data->faq_id)
                ->update(['faq_order'=>$current->faq_order]);

            self::update_data();
        }
    }

    public function edit_carousel($carousel_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $this->edit_carousel_data = DB::table('carousel as c')
            ->select('*')
            ->where('carousel_id','=',$carousel_id)
            ->get()
            ->toArray();

            $this->carousel_id = $this->edit_carousel_data[0]->carousel_id;
            $this->carousel_header_title = $this->edit_carousel_data[0]->carousel_header_title;
            $this->carousel_content_image = null;
            $this->carousel_paragraph_paragraph = $this->edit_carousel_data[0]->carousel_paragraph_paragraph;

        $this->dispatchBrowserEvent('openModal','EditCarouselModal');
        }
    }
    public function move_up_carousel($carousel_id){
        // get up
        $current_carousel = DB::table('carousel')
        ->where('carousel_id','=',$carousel_id)
        ->first();


        if($up_data = DB::table('carousel')
        ->where('carousel_order','<',$current_carousel->carousel_order)
        ->first()){
            DB::table('carousel as c')
                ->where('carousel_id','=',$current_carousel->carousel_id)
                ->update(['carousel_order'=>$up_data->carousel_order]);

            DB::table('carousel as c')
                ->where('carousel_id','=',$up_data->carousel_id)
                ->update(['carousel_order'=>$current_carousel->carousel_order]);

            $this->carousel_data = DB::table('carousel as c')
                ->select('*')
                ->orderBy('carousel_order')
                ->get()
                ->toArray();
        }

    }
    public function move_down_carousel($carousel_id){
        // get up
        $current_carousel = DB::table('carousel')
        ->where('carousel_id','=',$carousel_id)
        ->first();


        if($up_data = DB::table('carousel')
        ->where('carousel_order','>',$current_carousel->carousel_order)
        ->first()){
            DB::table('carousel as c')
                ->where('carousel_id','=',$current_carousel->carousel_id)
                ->update(['carousel_order'=>$up_data->carousel_order]);

            DB::table('carousel as c')
                ->where('carousel_id','=',$up_data->carousel_id)
                ->update(['carousel_order'=>$current_carousel->carousel_order]);

            $this->carousel_data = DB::table('carousel as c')
                ->select('*')
                ->orderBy('carousel_order')
                ->get()
                ->toArray();
        }

    }
    public function add_carousel(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            // if(strlen())
            // validation

            // image
         
            if($this->carousel_content_image && file_exists(storage_path().'/app/livewire-tmp/'.$this->carousel_content_image->getfilename())){
                $file_extension =$this->carousel_content_image->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->carousel_content_image->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('carousel')
                        ->where(['carousel_content_image'=> $new_file_name,
                                'carousel_id'=>$this->carousel_id])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/carousel/'.$new_file_name)){

                            // delete old img
                            $this->carousel_content_image = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }
            
            $current_order = DB::table('carousel as c')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('carousel')
                ->insert([
                    'carousel_header_title'=>$this->carousel_header_title,
                    'carousel_content_image' => $this->carousel_content_image,
                    'carousel_paragraph_paragraph' => $this->carousel_paragraph_paragraph,
                    'carousel_order' => ($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated carousel!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);

                $this->carousel_header_title = null;
                $this->carousel_content_image = null;
                $this->carousel_paragraph_paragraph= null;
                $this->carousel_image_id = rand(0,1000000);         

                $this->carousel_data = DB::table('carousel as c')
                ->select('*')
                ->orderBy('carousel_order')
                ->get()
                ->toArray();

                $this->dispatchBrowserEvent('openModal','AddCarouselModal');
            }
        }
    }
    public function save_edit_carousel(){

        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            // if(strlen())
            // validation

            // image
            $old_data = DB::table('carousel')
            ->where(['carousel_id'=>$this->carousel_id])
            ->first();
         
            if($this->carousel_content_image && file_exists(storage_path().'/app/livewire-tmp/'.$this->carousel_content_image->getfilename())){
                $file_extension =$this->carousel_content_image->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->carousel_content_image->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('carousel')
                        ->where(['carousel_content_image'=> $new_file_name,
                                'carousel_id'=>$this->carousel_id])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/carousel/'.$new_file_name)){

                            // delete old img
                           
                            $image_path = storage_path().'/app/public/content/carousel/'.$old_data->carousel_content_image;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            $this->carousel_content_image = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->carousel_content_image =  $old_data->carousel_content_image;
            } 
            
           
            if(DB::table('carousel as c')
                ->where('carousel_id','=',$this->carousel_id)
                ->update([
                    'carousel_header_title'=>$this->carousel_header_title,
                    'carousel_content_image' => $this->carousel_content_image,
                    'carousel_paragraph_paragraph' => $this->carousel_paragraph_paragraph,
            ])){
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'success',
                        'title'             									=> 'Successfully updated carousel!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1000',
                        'link'              									=> '#'
                    ]);

                $this->carousel_data = DB::table('carousel as c')
                ->select('*')
                ->orderBy('carousel_order')
                ->get()
                ->toArray();

                $this->dispatchBrowserEvent('openModal','EditCarouselModal');
            }
        }
    }
    public function delete_carousel($carousel_id){ 
        if(                
            $current_carousel = DB::table('carousel')
            ->where('carousel_id','=',$carousel_id)
            ->first()

            ){ 
        
            DB::table('carousel')
            ->where('carousel_id','=',$carousel_id)
            ->delete();
            $image_path = storage_path().'/app/public/content/carousel/'.$current_carousel->carousel_content_image;
            if(file_exists($image_path)){
            unlink($image_path);
            }
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'Successfully deleted carousel!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);
        }
        // update order?
        $carousel_data = DB::table('carousel')
            ->orderBy('carousel_order')
            ->get()
            ->toArray();
        foreach ($carousel_data as $key => $value) {
            DB::table('carousel as c')
                ->where('carousel_id','=',$value->carousel_id)
                ->update(['carousel_order'=>$key ]);
        }

        $this->carousel_data = DB::table('carousel as c')
            ->select('*')
            ->orderBy('carousel_order')
            ->get()
            ->toArray();
        

    }

    public function add_about_us(){
        $this->about_us = [
            'about_us_id'=> NULL,
            'about_us_logo'=>NULL,
            'about_us_header'=>'',
            'about_us_content'=> NULL
        ];
        $this->dispatchBrowserEvent('openModal','addAboutUsModal');
    }
    public function save_add_about_us(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->about_us['about_us_header'])<=0){
                return;
            }
            if(strlen($this->about_us['about_us_content'])<=0){
                return;
            }
            
            // validation

            // image
         
            if($this->about_us['about_us_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->about_us['about_us_logo']->getfilename())){
                $file_extension =$this->about_us['about_us_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->about_us['about_us_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('about_us')
                        ->where(['about_us_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/about_us/'.$new_file_name)){

                            // delete old img
                            $this->about_us['about_us_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }
            
            $current_order = DB::table('about_us')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('about_us')
                ->insert([
                    'about_us_logo'=>$this->about_us['about_us_logo'],
                    'about_us_header' => $this->about_us['about_us_header'],
                    'about_us_content' => $this->about_us['about_us_content'],
                    'about_us_order' => ($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $about_us = [
                    'about_us_id'=> NULL,
                    'about_us_logo'=>NULL,
                    'about_us_header'=>'',
                    'about_us_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','addAboutUsModal');
            }
        }
    }
    public function edit_about_us($about_us_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $about_us = DB::table('about_us')
                ->where('about_us_id','=',$about_us_id)
                ->first();
            $this->about_us = [
                'about_us_id'=> $about_us->about_us_id,
                'about_us_logo'=>NULL,
                'about_us_header'=>$about_us->about_us_header,
                'about_us_content'=> $about_us->about_us_content
            ];
            $this->dispatchBrowserEvent('openModal','editAboutUsModal');
        }
    }
    public function save_edit_about_us($about_us_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->about_us['about_us_header'])<=0){
                return;
            }
            if(strlen($this->about_us['about_us_content'])<=0){
                return;
            }
            
            $current = DB::table('about_us')
                ->where('about_us_id','=',$about_us_id)
                ->first();

         
            if($this->about_us['about_us_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->about_us['about_us_logo']->getfilename())){
                $file_extension =$this->about_us['about_us_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->about_us['about_us_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('about_us')
                        ->where(['about_us_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/about_us/'.$new_file_name)){

                            // delete old img
                            $image_path = storage_path().'/app/public/content/about_us/'.$current->about_us_logo;;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            $this->about_us['about_us_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->about_us['about_us_logo'] = $current->about_us_logo;
            }
            if(DB::table('about_us')
                ->where('about_us_id','=',$about_us_id)
                ->update([
                    'about_us_logo'=>$this->about_us['about_us_logo'],
                    'about_us_header' => $this->about_us['about_us_header'],
                    'about_us_content' => $this->about_us['about_us_content'],
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $this->about_us = [
                    'about_us_id'=> NULL,
                    'about_us_logo'=>NULL,
                    'about_us_header'=>'',
                    'about_us_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','editAboutUsModal');
            }
        }
    }

    public function delete_about_us($about_us_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $about_us = DB::table('about_us')
                ->where('about_us_id','=',$about_us_id)
                ->first();
            $this->about_us = [
                'about_us_id'=> $about_us->about_us_id,
                'about_us_logo'=>NULL,
                'about_us_header'=>$about_us->about_us_header,
                'about_us_content'=> $about_us->about_us_content
            ];
            $this->dispatchBrowserEvent('openModal','deleteAboutUsModal');
        }
    }
    public function save_delete_about_us($about_us_id){
        $current =  DB::table('about_us')
            ->where('about_us_id','=',$about_us_id)
            ->first();
        if( $current && 
            DB::table('about_us')
            ->where('about_us_id','=',$about_us_id)
            ->delete()
            ){
                

            $image_path = storage_path().'/app/public/content/about_us/'.$current->about_us_logo;;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $this->dispatchBrowserEvent('openModal','deleteAboutUsModal');
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'Successfully deleted!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);


            $about_us_data = DB::table('about_us as s')
                ->select('*')
                ->orderBy('about_us_order')
                ->get()
                ->toArray();

            foreach ($about_us_data as $key => $value) {
                DB::table('about_us as s')
                    ->where('about_us_id','=', $value->about_us_id)
                    ->update(['about_us_order'=>($key+1)]);
            }
            self::update_data(); 
        }
    }
    public function move_up_about_us($about_us_order){
        // get up
        $current = DB::table('about_us')
        ->where('about_us_order','=',$about_us_order)
        ->first();
     
        if($up_data = DB::table('about_us')
            ->where('about_us_order','<',$current->about_us_order)
            ->orderBy('about_us_order','desc')
            ->first()){
            DB::table('about_us')
                ->where('about_us_id','=',$current->about_us_id)
                ->update(['about_us_order'=>$up_data->about_us_order]);

            DB::table('about_us')
                ->where('about_us_id','=',$up_data->about_us_id)
                ->update(['about_us_order'=>$current->about_us_order]);

            self::update_data();
        }
    }
    public function move_down_about_us($about_us_order){
        // get up
        $current = DB::table('about_us')
        ->where('about_us_order','=',$about_us_order)
        ->first();
        
        if($down_data = DB::table('about_us')
        ->where('about_us_order','>',$current->about_us_order)
        ->orderBy('about_us_order')
        ->first()){
            DB::table('about_us')
                ->where('about_us_id','=',$current->about_us_id)
                ->update(['about_us_order'=>$down_data->about_us_order]);

            DB::table('about_us')
                ->where('about_us_id','=',$down_data->about_us_id)
                ->update(['about_us_order'=>$current->about_us_order]);

            self::update_data();
        }
    }
    
    public function edit_about_us_content(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $about_us_page = DB::table('about_us_page')
                ->first();
          
            $this->about_us_page = [
                'about_us_page_id'=> $about_us_page->about_us_page_id,
                'about_us_page_content'=> $about_us_page->about_us_page_content
            ];
            $this->dispatchBrowserEvent('openModal','editAboutUsPageModal');
        }
    }
    public function save_edit_about_us_content($about_us_page_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];
        if($this->access_role['U'] ){
            if(strlen($this->about_us_page['about_us_page_content'])<=0){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Please input content!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                return 0;
            }
          
            if(DB::table('about_us_page')
                ->where('about_us_page_id','=',$about_us_page_id)
                ->update([
                    'about_us_page_content'=>$this->about_us_page['about_us_page_content']
                ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated content!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
            }
            $this->dispatchBrowserEvent('openModal','editAboutUsPageModal');
        }
    }


    public function add_academic(){
        $this->academic = [
            'academic_id'=> NULL,
            'academic_logo'=>NULL,
            'academic_header'=>'',
            'academic_content'=> NULL
        ];
        $this->dispatchBrowserEvent('openModal','addAcademicModal');
    }
    public function save_add_academic(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->academic['academic_header'])<=0){
                return;
            }
            if(strlen($this->academic['academic_content'])<=0){
                return;
            }
            
            // validation

            // image
         
            if($this->academic['academic_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->academic['academic_logo']->getfilename())){
                $file_extension =$this->academic['academic_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->academic['academic_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('academics')
                        ->where(['academic_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/academic/'.$new_file_name)){

                            // delete old img
                            $this->academic['academic_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }
            
            $current_order = DB::table('academics')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('academics')
                ->insert([
                    'academic_logo'=>$this->academic['academic_logo'],
                    'academic_header' => $this->academic['academic_header'],
                    'academic_content' => $this->academic['academic_content'],
                    'academic_order' => ($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $academic = [
                    'academic_id'=> NULL,
                    'academic_logo'=>NULL,
                    'academic_header'=>'',
                    'academic_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','addAcademicModal');
            }
        }
    }
    public function edit_academic($academic_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $academic = DB::table('academics')
                ->where('academic_id','=',$academic_id)
                ->first();
            $this->academic = [
                'academic_id'=> $academic->academic_id,
                'academic_logo'=>NULL,
                'academic_header'=>$academic->academic_header,
                'academic_content'=> $academic->academic_content
            ];
            $this->dispatchBrowserEvent('openModal','editAcademicModal');
        }
    }
    public function save_edit_academic($academic_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->academic['academic_header'])<=0){
                return;
            }
            if(strlen($this->academic['academic_content'])<=0){
                return;
            }
            
            $current = DB::table('academics')
                ->where('academic_id','=',$academic_id)
                ->first();

         
            if($this->academic['academic_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->academic['academic_logo']->getfilename())){
                $file_extension =$this->academic['academic_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->academic['academic_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('academics')
                        ->where(['academic_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/academic/'.$new_file_name)){

                            // delete old img
                            $image_path = storage_path().'/app/public/content/academic/'.$current->academic_logo;;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            $this->academic['academic_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->academic['academic_logo'] = $current->academic_logo;
            }
            if(DB::table('academics')
                ->where('academic_id','=',$academic_id)
                ->update([
                    'academic_logo'=>$this->academic['academic_logo'],
                    'academic_header' => $this->academic['academic_header'],
                    'academic_content' => $this->academic['academic_content'],
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $this->academic = [
                    'academic_id'=> NULL,
                    'academic_logo'=>NULL,
                    'academic_header'=>'',
                    'academic_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','editAcademicModal');
            }
        }
    }
    public function delete_academic($academic_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $academic = DB::table('academics')
                ->where('academic_id','=',$academic_id)
                ->first();
            $this->academic = [
                'academic_id'=> $academic->academic_id,
                'academic_logo'=>NULL,
                'academic_header'=>$academic->academic_header,
                'academic_content'=> $academic->academic_content
            ];
            $this->dispatchBrowserEvent('openModal','deleteAcademicModal');
        }
    }
    public function save_delete_academic($academic_id){
        $current =  DB::table('academics')
            ->where('academic_id','=',$academic_id)
            ->first();
        if( $current && 
            DB::table('academics')
            ->where('academic_id','=',$academic_id)
            ->delete()
            ){
                

            $image_path = storage_path().'/app/public/content/academic/'.$current->academic_logo;;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $this->dispatchBrowserEvent('openModal','deleteAcademicModal');
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'Successfully deleted!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);


            $academic_data = DB::table('academics')
                ->select('*')
                ->orderBy('academic_order')
                ->get()
                ->toArray();

            foreach ($academic_data as $key => $value) {
                DB::table('academics')
                    ->where('academic_id','=', $value->academic_id)
                    ->update(['academic_order'=>($key+1)]);
            }
            self::update_data(); 
        }
    }
    public function move_up_academic($academic_order){
        // get up
        $current = DB::table('academics')
        ->where('academic_order','=',$academic_order)
        ->first();
     
        if($up_data = DB::table('academics')
            ->where('academic_order','<',$current->academic_order)
            ->orderBy('academic_order','desc')
            ->first()){
            DB::table('academics')
                ->where('academic_id','=',$current->academic_id)
                ->update(['academic_order'=>$up_data->academic_order]);

            DB::table('academics')
                ->where('academic_id','=',$up_data->academic_id)
                ->update(['academic_order'=>$current->academic_order]);

            self::update_data();
        }
    }
    public function move_down_academic($academic_order){
        // get up
        $current = DB::table('academics')
        ->where('academic_order','=',$academic_order)
        ->first();
        
        if($down_data = DB::table('academics')
        ->where('academic_order','>',$current->academic_order)
        ->orderBy('academic_order')
        ->first()){
            DB::table('academics')
                ->where('academic_id','=',$current->academic_id)
                ->update(['academic_order'=>$down_data->academic_order]);

            DB::table('academics')
                ->where('academic_id','=',$down_data->academic_id)
                ->update(['academic_order'=>$current->academic_order]);

            self::update_data();
        }
    }

    
    public function add_admission(){
        $this->admission = [
            'admission_id'=> NULL,
            'admission_logo'=>NULL,
            'admission_header'=>'',
            'admission_content'=> NULL
        ];
        $this->dispatchBrowserEvent('openModal','addadmissionModal');
    }
    public function save_add_admission(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->admission['admission_header'])<=0){
                return;
            }
            if(strlen($this->admission['admission_content'])<=0){
                return;
            }
            
            // validation

            // image
         
            if($this->admission['admission_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->admission['admission_logo']->getfilename())){
                $file_extension =$this->admission['admission_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->admission['admission_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('admissions')
                        ->where(['admission_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/admission/'.$new_file_name)){

                            // delete old img
                            $this->admission['admission_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }
            
            $current_order = DB::table('admissions')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('admissions')
                ->insert([
                    'admission_logo'=>$this->admission['admission_logo'],
                    'admission_header' => $this->admission['admission_header'],
                    'admission_content' => $this->admission['admission_content'],
                    'admission_order' => ($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $admission = [
                    'admission_id'=> NULL,
                    'admission_logo'=>NULL,
                    'admission_header'=>'',
                    'admission_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','addadmissionModal');
            }
        }
    }
    public function edit_admission($admission_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $admission = DB::table('admissions')
                ->where('admission_id','=',$admission_id)
                ->first();
            $this->admission = [
                'admission_id'=> $admission->admission_id,
                'admission_logo'=>NULL,
                'admission_header'=>$admission->admission_header,
                'admission_content'=> $admission->admission_content
            ];
            $this->dispatchBrowserEvent('openModal','editadmissionModal');
        }
    }
    public function save_edit_admission($admission_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->admission['admission_header'])<=0){
                return;
            }
            if(strlen($this->admission['admission_content'])<=0){
                return;
            }
            
            $current = DB::table('admissions')
                ->where('admission_id','=',$admission_id)
                ->first();

         
            if($this->admission['admission_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->admission['admission_logo']->getfilename())){
                $file_extension =$this->admission['admission_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->admission['admission_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('admissions')
                        ->where(['admission_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/admission/'.$new_file_name)){

                            // delete old img
                            $image_path = storage_path().'/app/public/content/admission/'.$current->admission_logo;;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            $this->admission['admission_logo'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->admission['admission_logo'] = $current->admission_logo;
            }
            if(DB::table('admissions')
                ->where('admission_id','=',$admission_id)
                ->update([
                    'admission_logo'=>$this->admission['admission_logo'],
                    'admission_header' => $this->admission['admission_header'],
                    'admission_content' => $this->admission['admission_content'],
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $this->admission = [
                    'admission_id'=> NULL,
                    'admission_logo'=>NULL,
                    'admission_header'=>'',
                    'admission_content'=> NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','editadmissionModal');
            }
        }
    }
    public function delete_admission($admission_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $admission = DB::table('admissions')
                ->where('admission_id','=',$admission_id)
                ->first();
            $this->admission = [
                'admission_id'=> $admission->admission_id,
                'admission_logo'=>NULL,
                'admission_header'=>$admission->admission_header,
                'admission_content'=> $admission->admission_content
            ];
            $this->dispatchBrowserEvent('openModal','deleteadmissionModal');
        }
    }
    public function save_delete_admission($admission_id){
        $current =  DB::table('admissions')
            ->where('admission_id','=',$admission_id)
            ->first();
        if( $current && 
            DB::table('admissions')
            ->where('admission_id','=',$admission_id)
            ->delete()
            ){
                

            $image_path = storage_path().'/app/public/content/admission/'.$current->admission_logo;;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            $this->dispatchBrowserEvent('openModal','deleteadmissionModal');
            $this->dispatchBrowserEvent('swal:redirect',[
                'position'          									=> 'center',
                'icon'              									=> 'success',
                'title'             									=> 'Successfully deleted!',
                'showConfirmButton' 									=> 'true',
                'timer'             									=> '1000',
                'link'              									=> '#'
            ]);


            $admission_data = DB::table('admissions')
                ->select('*')
                ->orderBy('admission_order')
                ->get()
                ->toArray();

            foreach ($admission_data as $key => $value) {
                DB::table('admissions')
                    ->where('admission_id','=', $value->admission_id)
                    ->update(['admission_order'=>($key+1)]);
            }
            self::update_data(); 
        }
    }
    public function move_up_admission($admission_order){
        // get up
        $current = DB::table('admissions')
        ->where('admission_order','=',$admission_order)
        ->first();
     
        if($up_data = DB::table('admissions')
            ->where('admission_order','<',$current->admission_order)
            ->orderBy('admission_order','desc')
            ->first()){
            DB::table('admissions')
                ->where('admission_id','=',$current->admission_id)
                ->update(['admission_order'=>$up_data->admission_order]);

            DB::table('admissions')
                ->where('admission_id','=',$up_data->admission_id)
                ->update(['admission_order'=>$current->admission_order]);

            self::update_data();
        }
    }
    public function move_down_admission($admission_order){
        // get up
        $current = DB::table('admissions')
        ->where('admission_order','=',$admission_order)
        ->first();
        
        if($down_data = DB::table('admissions')
        ->where('admission_order','>',$current->admission_order)
        ->orderBy('admission_order')
        ->first()){
            DB::table('admissions')
                ->where('admission_id','=',$current->admission_id)
                ->update(['admission_order'=>$down_data->admission_order]);

            DB::table('admissions')
                ->where('admission_id','=',$down_data->admission_id)
                ->update(['admission_order'=>$current->admission_order]);

            self::update_data();
        }
    }

    public function add_faculty(){

        $this->faculty = [
            'faculty_id' => NULL,
            'faculty_picture' => NULL,
            'faculty_fullname' => NULL,
            'faculty_position' => NULL,
            'faculty_title' => NULL,
            'faculty_description' => NULL,
            'faculty_order' => NULL
        ];
        $this->dispatchBrowserEvent('openModal','addFacultyModal');
    }
    public function save_add_faculty(){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['C'] ){
            if(strlen($this->faculty['faculty_fullname'])<=0){
                return;
            }
            if(strlen($this->faculty['faculty_position'])<=0){
                return;
            }
            if(strlen($this->faculty['faculty_description'])<=0){
                return;
            }
            
            // validation

            // image
         
            if($this->faculty['faculty_picture'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->faculty['faculty_picture']->getfilename())){
                $file_extension =$this->faculty['faculty_picture']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->faculty['faculty_picture']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('faculty')
                        ->where(['faculty_picture'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/faculty/'.$new_file_name)){

                            // delete old img
                            $this->faculty['faculty_picture'] = $new_file_name;
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Image is too large!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
                return 0;
            }
            
            $current_order = DB::table('faculty')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('faculty')
                ->insert([
                    'faculty_picture'=>$this->faculty['faculty_picture'],
                    'faculty_fullname' => $this->faculty['faculty_fullname'],
                    'faculty_position' => $this->faculty['faculty_position'],
                    'faculty_title' => $this->faculty['faculty_title'],
                    'faculty_description' => $this->faculty['faculty_description'],
                    'faculty_order' => ($current_order->current_order+1)
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $faculty = [
                    'faculty_id' => NULL,
                    'faculty_picture' => NULL,
                    'faculty_fullname' => NULL,
                    'faculty_position' => NULL,
                    'faculty_title' => NULL,
                    'faculty_description' => NULL,
                    'faculty_order' => NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','addFacultyModal');
            }
        }
    }
    public function edit_faculty($faculty_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            $faculty = DB::table('faculty')
                ->where('faculty_id','=',$faculty_id)
                ->first();
            $this->faculty = [
                    'faculty_id' => $faculty->faculty_id,
                    'faculty_picture' =>NULL,
                    'faculty_fullname' => $faculty->faculty_fullname,
                    'faculty_position' => $faculty->faculty_position,
                    'faculty_title' => $faculty->faculty_title,
                    'faculty_description' => $faculty->faculty_description,
                ];
          
            $this->dispatchBrowserEvent('openModal','editFacultyModal');
        }
    }
    public function save_edit_faculty($faculty_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            if(strlen($this->faculty['faculty_fullname'])<=0){
                return;
            }
            if(strlen($this->faculty['faculty_position'])<=0){
                return;
            }
            if(strlen($this->faculty['faculty_description'])<=0){
                return;
            }
            
            // validation
            $faculty = DB::table('faculty')
            ->where('faculty_id','=',$faculty_id)
            ->first();
         
            if($this->faculty['faculty_picture'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->faculty['faculty_picture']->getfilename())){
                $file_extension =$this->faculty['faculty_picture']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->faculty['faculty_picture']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('faculty')
                        ->where(['faculty_picture'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/faculty/'.$new_file_name)){

                            // delete old img
                            $this->faculty['faculty_picture'] = $new_file_name;
                            $image_path = storage_path().'/app/public/content/faculty/'.$faculty->faculty_picture;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            // resize thumb nail
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->faculty['faculty_picture'] = $faculty->faculty_picture;
            }
            
            $current_order = DB::table('faculty')
                ->select(DB::raw('count(*) as current_order'))
                ->first();

            if(DB::table('faculty')
                ->where('faculty_id','=',$faculty_id)
                ->update([
                    'faculty_picture'=>$this->faculty['faculty_picture'],
                    'faculty_fullname' => $this->faculty['faculty_fullname'],
                    'faculty_position' => $this->faculty['faculty_position'],
                    'faculty_title' => $this->faculty['faculty_title'],
                    'faculty_description' => $this->faculty['faculty_description'],
            ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully added!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $faculty = [
                    'faculty_id' => NULL,
                    'faculty_picture' => NULL,
                    'faculty_fullname' => NULL,
                    'faculty_position' => NULL,
                    'faculty_title' => NULL,
                    'faculty_description' => NULL,
                    'faculty_order' => NULL
                ];

                self::update_data();
                $this->dispatchBrowserEvent('openModal','editFacultyModal');
            }
        } 
    }
    public function delete_faculty($faculty_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['D'] ){
            $faculty = DB::table('faculty')
                ->where('faculty_id','=',$faculty_id)
                ->first();
            $this->faculty = [
                    'faculty_id' => $faculty->faculty_id,
                    'faculty_picture' =>NULL,
                    'faculty_fullname' => $faculty->faculty_fullname,
                    'faculty_position' => $faculty->faculty_position,
                    'faculty_title' => $faculty->faculty_title,
                    'faculty_description' => $faculty->faculty_description,
                ];
          
            $this->dispatchBrowserEvent('openModal','deleteFacultyModal');
        }
    }
    public function save_delete_faculty($faculty_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['D'] ){
            $faculty = DB::table('faculty')
            ->where('faculty_id','=',$faculty_id)
            ->first();
            if(DB::table('faculty')
                ->where('faculty_id','=',$faculty_id)
                ->delete()){
                $image_path = storage_path().'/app/public/content/faculty/'.$faculty->faculty_picture;
                if(file_exists($image_path)){
                    unlink($image_path);
                }

                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully deleted!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                $faculty = [
                    'faculty_id' => NULL,
                    'faculty_picture' => NULL,
                    'faculty_fullname' => NULL,
                    'faculty_position' => NULL,
                    'faculty_title' => NULL,
                    'faculty_description' => NULL,
                    'faculty_order' => NULL
                ];

                self::update_data();
                
                $this->dispatchBrowserEvent('openModal','deleteFacultyModal');
            }
        }
    }

    public function edit_system_assets($system_asset_id){
        $this->access_role = [
            'C' => true,
            'R' => true,
            'U' => true,
            'D' => true
        ];

        if($this->access_role['U'] ){
            if(strlen($this->system_asset['system_asset_name'])<=0){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'warning',
                    'title'             									=> 'Please input system name!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1000',
                    'link'              									=> '#'
                ]);
                return 0;

            }
            $system_asset = DB::table('system_assets')
                ->where('system_asset_id','=',$system_asset_id)
                ->first();
            
            if($this->system_asset['system_asset_logo'] && file_exists(storage_path().'/app/livewire-tmp/'.$this->system_asset['system_asset_logo']->getfilename())){
                $file_extension =$this->system_asset['system_asset_logo']->getClientOriginalExtension();
                $tmp_name = 'livewire-tmp/'.$this->system_asset['system_asset_logo']->getfilename();
                $size = Storage::size($tmp_name);
                $mime = Storage::mimeType($tmp_name);
                $max_image_size = 20 * 1024*1024; // 5 mb
                $file_extensions = array('image/jpeg','image/png','image/jpg');
                
                if($size<= $max_image_size){
                    $valid_extension = false;
                    foreach ($file_extensions as $value) {
                        if($value == $mime){
                            $valid_extension = true;
                            break;
                        }
                    }
                    if($valid_extension){
                        
                        // move
                        $new_file_name = md5($tmp_name).'.'.$file_extension;
                        while(DB::table('system_assets')
                        ->where(['system_asset_logo'=> $new_file_name])
                        ->first()){
                            $new_file_name = md5($tmp_name.rand(1,10000000)).'.'.$file_extension;
                        }
                        if(Storage::move($tmp_name, 'public/content/system_asset/'.$new_file_name)){

                            // delete old img
                            $this->system_asset['system_asset_logo']  = $new_file_name;
                            // resize thumb nail
                            $image_path = storage_path().'/app/public/content/system_asset/'.$system_asset->system_asset_logo;
                            if(file_exists($image_path)){
                                unlink($image_path);
                            }
                            // resize 500x500 px
    
                        }
                    }else{
                        $this->dispatchBrowserEvent('swal:redirect',[
                            'position'          									=> 'center',
                            'icon'              									=> 'warning',
                            'title'             									=> 'Invalid image type!',
                            'showConfirmButton' 									=> 'true',
                            'timer'             									=> '1500',
                            'link'              									=> '#'
                        ]);
                        return 0;
                    }
                }else{
                    $this->dispatchBrowserEvent('swal:redirect',[
                        'position'          									=> 'center',
                        'icon'              									=> 'warning',
                        'title'             									=> 'Image is too large!',
                        'showConfirmButton' 									=> 'true',
                        'timer'             									=> '1500',
                        'link'              									=> '#'
                    ]);
                    return 0;
                }  
                $this->carousel_image_id = rand(0,1000000);         
            }else{
                $this->system_asset['system_asset_logo'] = $system_asset->system_asset_logo;
            }
            
            if(DB::table('system_assets')
                ->where('system_asset_id','=',$system_asset_id)
                ->update([
                    'system_asset_name'  =>  $this->system_asset['system_asset_name'],
                    'system_asset_logo'  =>  $this->system_asset['system_asset_logo'],
                ])){
                $this->dispatchBrowserEvent('swal:redirect',[
                    'position'          									=> 'center',
                    'icon'              									=> 'success',
                    'title'             									=> 'Successfully updated!',
                    'showConfirmButton' 									=> 'true',
                    'timer'             									=> '1500',
                    'link'              									=> '#'
                ]);
            }

            $system_assets = DB::table('system_assets')
            ->first();
            $this->system_asset =[
                'system_asset_id'  => $system_assets->system_asset_id,
                'system_asset_name'  => $system_assets->system_asset_name,
                'system_asset_logo'  => NULL
            ];
            $this->system_asset_logo = $system_assets->system_asset_logo;
            
        }
    }
}
