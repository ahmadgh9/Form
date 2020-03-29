<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function process(Request $request){
        $validate = 'required|numeric|in:1,2,3,4,5';
        $validate_request = Validator::make($request->all(),[
            'apartment' => $validate,
            'sound' => $validate,
            'hair' => $validate,
            'exercise' => $validate,
            'care' => $validate,
            'maintenance' => $validate,
            'attention' => $validate,
            'dogs' => $validate,
            'children' => $validate,
            'cats' => $validate,
            'iq' => $validate,
            'guard' => $validate,
            'stranger' => $validate,
        ],
            [
                'apartment.required' => 'گزینه مناسب بودن برای آپارتمان باید انتخاب شود',
                'apartment.numeric' => 'گزینه مناسب بودن برای آپارتمان باید عددی باشد',
                'apartment.in' => 'گزینه مناسب بودن برای آپارتمان زیر مجموعه ی بازه تعیین شده نیست',

                'sound.required' => 'گزینه میزان سر و صدا باید انتخاب شود',
                'sound.numeric' => 'گزینه میزان سر و صدا باید عددی باشد',
                'sound.in' => 'گزینه میزان سر و صدا زیر مجموعه ی بازه تعیین شده نیست',

                'hair.required' => 'گزینه میزان ریزش مو باید انتخاب شود',
                'hair.numeric' => 'گزینه میزان ریزش مو باید عددی باشد',
                'hair.in' => 'گزینه میزان ریزش مو زیر مجموعه ی بازه تعیین شده نیست',

                'exercise.required' => 'گزینه میزان نیاز به فعالیت روزانه باید انتخاب شود',
                'exercise.numeric' => 'گزینه میزان نیاز به فعالیت روزانه باید عددی باشد',
                'exercise.in' => 'گزینه میزان نیاز به فعالیت روزانه زیر مجموعه ی بازه تعیین شده نیست',

                'care.required' => 'گزینه میزان نیاز به رسیدگی ها بهداشتی باید انتخاب شود',
                'care.numeric' => 'گزینه میزان نیاز به رسیدگی ها بهداشتی باید عددی باشد',
                'care.in' => 'گزینه میزان نیاز به رسیدگی ها بهداشتی زیر مجموعه ی بازه تعیین شده نیست',

                'maintenance.required' => 'گزینه میزان نیاز به مراقبت و نگهداری باید انتخاب شود',
                'maintenance.numeric' => 'گزینه میزان نیاز به مراقبت و نگهداری باید عددی باشد',
                'maintenance.in' => 'گزینه میزان نیاز به مراقبت و نگهداری زیر مجموعه ی بازه تعیین شده نیست',

                'attention.required' => 'گزینه میزان نیاز به توجه و بازی باید انتخاب شود',
                'attention.numeric' => 'گزینه میزان نیاز به توجه و بازی باید عددی باشد',
                'attention.in' => 'گزینه میزان نیاز به توجه و بازی زیر مجموعه ی بازه تعیین شده نیست',

                'dogs.required' => 'گزینه میزان سازگاری با دیگر سگ ها باید انتخاب شود',
                'dogs.numeric' => 'گزینه میزان سازگاری با دیگر سگ ها باید عددی باشد',
                'dogs.in' => 'گزینه میزان سازگاری با دیگر سگ ها زیر مجموعه ی بازه تعیین شده نیست',

                'children.required' => 'گزینه سازگاری با کودکان باید انتخاب شود',
                'children.numeric' => 'گزینه سازگاری با کودکان باید عددی باشد',
                'children.in' => 'گزینه سازگاری با کودکان زیر مجموعه ی بازه تعیین شده نیست',

                'cats.required' => 'گزینه سازگاری با گربه ها باید انتخاب شود',
                'cats.numeric' => 'گزینه سازگاری با گربه ها باید عددی باشد',
                'cats.in' => 'گزینه سازگاری با گربه ها زیر مجموعه ی بازه تعیین شده نیست',

                'iq.required' => 'گزینه میزان هوش باید انتخاب شود',
                'iq.numeric' => 'گزینه میزان هوش باید عددی باشد',
                'iq.in' => 'گزینه میزان هوش زیر مجموعه ی بازه تعیین شده نیست',

                'guard.required' => 'گزینه مناسب بودن برای نگهبانی باید انتخاب شود',
                'guard.numeric' => 'گزینه مناسب بودن برای نگهبانی باید عددی باشد',
                'guard.in' => 'گزینه مناسب بودن برای نگهبانی زیر مجموعه ی بازه تعیین شده نیست',

                'stranger.required' => 'گزینه میزان غریبه دوستی باید انتخاب شود',
                'stranger.numeric' => 'گزینه میزان غریبه دوستی باید عددی باشد',
                'stranger.in' => 'گزینه میزان غریبه دوستی زیر مجموعه ی بازه تعیین شده نیست',
            ]);

        if($validate_request->fails()) { return response()->json(['error'=>$validate_request->errors()->first()],422);}

        $dogs = Dog::where('apartment',$request->apartment)->
        where('sound',$request->sound)->where('hair_loss',$request->hair)
            ->where('daily_exercise',$request->exercise)->where('health_care',$request->care)->where('maintenance',$request->maintenance)->where('attention',$request->attention)
            ->where('compatibility_with_dogs',$request->dogs)->where('compatibility_with_children',$request->children)->where('compatibility_with_cats',$request->cats)->where('iq',$request->iq)
            ->where('guard',$request->guard)->where('stranger',$request->stranger)->get();

        return view('result',compact('dogs'));
    }
}
