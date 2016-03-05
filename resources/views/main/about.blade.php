@extends('main.layout')
@section('content')
    <div class="container about-container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-newspaper-o"></i>{{trans('language.aboutUsHeader')}}
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/aboutus.jpg')}}" alt="درباره شرکت نفیس ترابر">
                            </a>

                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">درباره شرکت نفیس ترابر</h4>
                            <p>
                                شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                            </p>
                            <p>
                                <span>در حال حاضر اهم خدمات شرکت به شرح ذیل می باشد:</span>
                                <span>1- صادرات بار هوایی از ایران به تمامی مقاصد در تمام جهان و تحویل در آدرس. </span>
                                <span>2- واردات بار از تمامی مقاصد به ایران به صورت هوایی، دریایی و زمینی.</span>
                                <span>3-ارسال بار از تهران به تمامی فرودگاه ها و شهرهای کشور و بالعکس و سیستم تحویل بار در آدرس.</span>
                                <span>4-بسته بندی تخصصی بار، بویژه آثار هنری، هنرهای ظریفه، صنایع دستی و لوازم منزل.</span>
                                <span>5-اخذ جواز صادراتی، ترانزیت و ترخیص بارهای ورودی.</span>
                                <span>6- ارسال و دریافت بسته های پستی بین المللی. (کوریر)</span>
                                <span></span>
                            </p>

                        </div>
                    </div>

                    <div class="team">
                        <ul class="media-list">
                            <h4>هیات مدیره</h4>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                        </ul>
                        <ul class="media-list">
                            <h4>بازرگانیk</h4>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{asset('images/CHAIRMAN.jpg')}}" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">هیات مدیره</h4>
                                    شرکت خدمات بار هوایی نفیس ترابر(سهامی خاص) ، در سال 1386 بنیان گذاری گردید و از 16 خرداد ماه سال نود و یک، با هیات مدیره و کارکنان خبره و متخصص جدید آغاز به کار نموده است. هم اکنون شرکت خدمات بار هوایی نفیس ترابر(N.T.C) با تمامی شرکت های ایرانی و خارجی فعال در زمینه ی حمل بار همکاری و مشارکت دارد.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection