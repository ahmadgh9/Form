@extends('app')
@section('content')
    <form class="float-right mt-5" action="{{route('process')}}" method="post">
        @csrf
        <p>1 - به چه میزان برای آپارتمان مناسب باشد؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio1" name="apartment" value="1" required>
            <label class="custom-control-label" for="customRadio1">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio2" name="apartment" value="2">
            <label class="custom-control-label" for="customRadio2">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio3" name="apartment" value="3">
            <label class="custom-control-label" for="customRadio3">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio4" name="apartment" value="4">
            <label class="custom-control-label" for="customRadio4">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio5" name="apartment" value="5">
            <label class="custom-control-label" for="customRadio5">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>2 - به چه میزان سر و صدا داشته باشد؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio6" name="sound" value="1" required>
            <label class="custom-control-label" for="customRadio6">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio7" name="sound" value="2">
            <label class="custom-control-label" for="customRadio7">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio8" name="sound" value="3">
            <label class="custom-control-label" for="customRadio8">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio9" name="sound" value="4">
            <label class="custom-control-label" for="customRadio9">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio10" name="sound" value="5">
            <label class="custom-control-label " for="customRadio10">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>3 - به چه میزان ریزش مو داشته باشد؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio11" name="hair" value="1" required>
            <label class="custom-control-label" for="customRadio11">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio12" name="hair" value="2">
            <label class="custom-control-label" for="customRadio12">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio13" name="hair" value="3">
            <label class="custom-control-label" for="customRadio13">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio14" name="hair" value="4">
            <label class="custom-control-label" for="customRadio14">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio15" name="hair" value="5">
            <label class="custom-control-label " for="customRadio15">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>4 - به چه میزان باید فعالیت روزانه داشته باشد؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio16" name="exercise" value="1" required>
            <label class="custom-control-label" for="customRadio16">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio17" name="exercise" value="2">
            <label class="custom-control-label" for="customRadio17">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio18" name="exercise" value="3">
            <label class="custom-control-label" for="customRadio18">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio19" name="exercise" value="4">
            <label class="custom-control-label" for="customRadio19">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio20" name="exercise" value="5">
            <label class="custom-control-label " for="customRadio20">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>5 -به چه میزان نیاز به رسیدگی های بهداشتی داشته باشد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio21" name="care" value="1" required>
            <label class="custom-control-label" for="customRadio21">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio22" name="care" value="2">
            <label class="custom-control-label" for="customRadio22">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio23" name="care" value="3">
            <label class="custom-control-label" for="customRadio23">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio24" name="care" value="4">
            <label class="custom-control-label" for="customRadio24">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio25" name="care" value="5">
            <label class="custom-control-label " for="customRadio25">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>6 -به چه میزان نیاز به مراقبت و نگهداری داشته باشد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio26" name="maintenance" value="1" required>
            <label class="custom-control-label" for="customRadio26">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio27" name="maintenance" value="2">
            <label class="custom-control-label" for="customRadio27">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio28" name="maintenance" value="3">
            <label class="custom-control-label" for="customRadio28">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio29" name="maintenance" value="4">
            <label class="custom-control-label" for="customRadio29">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio30" name="maintenance" value="5">
            <label class="custom-control-label " for="customRadio30">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>7 - به چه میزان نیاز به توجه و بازی دارد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio31" name="attention" value="1" required>
            <label class="custom-control-label" for="customRadio31">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio32" name="attention" value="2">
            <label class="custom-control-label" for="customRadio32">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio33" name="attention" value="3">
            <label class="custom-control-label" for="customRadio33">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio34" name="attention" value="4">
            <label class="custom-control-label" for="customRadio34">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio35" name="attention" value="5">
            <label class="custom-control-label " for="customRadio35">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>8 - به چه میزان با بقیه ی سگ ها سازگار باشد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio36" name="dogs" value="1" required>
            <label class="custom-control-label" for="customRadio36">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio37" name="dogs" value="2">
            <label class="custom-control-label" for="customRadio37">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio38" name="dogs" value="3">
            <label class="custom-control-label" for="customRadio38">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio39" name="dogs" value="4">
            <label class="custom-control-label" for="customRadio39">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio40" name="dogs" value="5">
            <label class="custom-control-label " for="customRadio40">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>9 - به چه میزان با کودکان سازگار باشد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio41" name="children" value="1" required>
            <label class="custom-control-label" for="customRadio41">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio42" name="children" value="2">
            <label class="custom-control-label" for="customRadio42">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio43" name="children" value="3">
            <label class="custom-control-label" for="customRadio43">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio44" name="children" value="4">
            <label class="custom-control-label" for="customRadio44">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio45" name="children" value="5">
            <label class="custom-control-label " for="customRadio45">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>10 - به چه میزان با گربه ها سازگار باشد ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio46" name="cats" value="1" required>
            <label class="custom-control-label" for="customRadio46">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio47" name="cats" value="2">
            <label class="custom-control-label" for="customRadio47">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio48" name="cats" value="3">
            <label class="custom-control-label" for="customRadio48">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio49" name="cats" value="4">
            <label class="custom-control-label" for="customRadio49">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio50" name="cats" value="5">
            <label class="custom-control-label " for="customRadio50">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>11 - میزان یادگیری و هوش ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio51" name="iq" value="1" required>
            <label class="custom-control-label" for="customRadio51">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio52" name="iq" value="2">
            <label class="custom-control-label" for="customRadio52">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio53" name="iq" value="3">
            <label class="custom-control-label" for="customRadio53">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio54" name="iq" value="4">
            <label class="custom-control-label" for="customRadio54">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio55" name="iq" value="5">
            <label class="custom-control-label " for="customRadio55">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>12 - توانایی برای سگ نگهبان ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio56" name="guard" value="1" required>
            <label class="custom-control-label" for="customRadio56">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio57" name="guard" value="2">
            <label class="custom-control-label" for="customRadio57">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio58" name="guard" value="3">
            <label class="custom-control-label" for="customRadio58">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio59" name="guard" value="4">
            <label class="custom-control-label" for="customRadio59">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio60" name="guard" value="5">
            <label class="custom-control-label " for="customRadio60">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <p>13 - غریبه دوستی ؟</p>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio61" name="stranger" value="1" required>
            <label class="custom-control-label" for="customRadio61">خیلی کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio62" name="stranger" value="2">
            <label class="custom-control-label" for="customRadio62">کم</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio63" name="stranger" value="3">
            <label class="custom-control-label" for="customRadio63">متوسط</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio64" name="stranger" value="4">
            <label class="custom-control-label" for="customRadio64">زیاد</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio65" name="stranger" value="5">
            <label class="custom-control-label " for="customRadio65">خیلی زیاد</label>
        </div>

        <br>
        <br>
        <br>

        <input type="submit">

    </form>
@endsection

