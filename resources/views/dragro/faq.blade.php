@extends('layouts.main')

@section('content')
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center web">
                    <ol class="breadcrumb">
                        <li><a href="/{{$lang}}">@lang('vendor.home')</a></li>
                        <li class="active">Faq</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-heading text-center">
                       @lang('vendor.questions')
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">1</span>
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        Dr. Agro hesabı necə açılır?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Dragro.az saytından (Həmçinin, PlayStore və ya AppStore-dan) daxil olursunuz.
                                    Qeydiyyat düyməsinə vurulur, açılan qeydiyyat ərizə formasında ad, soyad, e-mail,
                                    şifrələri qeyd etdikdən və terms and Conditions (şərtlər və qaydaları)
                                    təsdiqlədikdən sonra “Qeydiyyatdan” düyməsinə vurulur.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">2</span>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Dr. Agro-dan istifadənin mənim üçün nə kimi faydası var?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Dr. Agro platforması sizin üçün bir neçə yüksək peşəkar aqranom məsləhətini bir
                                    telefon qədər yaxın edir. Siz bu proqramdan istifadə etməklə əkindən məhsul yığımına
                                    qədər görəcəyiniz bütün işləri əvvəlcədən öyrənə və mütəmadi olaraq bu haqda
                                    bildiriş ala bilərsiniz. Bundan başqa əsas investisiya xərclərini, əkin planlarınızı
                                    də bu platformadan əldə edə bilərsiniz.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">3</span>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Dr. Agro-da təklif edilən xidmət paketləri mənə nə kimi məlumatlar verəcəkdir?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Dr. Agro Start paketi ödənişsizdir. Siz burada olan büdcə hesablama, əkin sahənizi
                                    yaratma, əkinlərinizin planlarını görmə və aylıq bildirişlər alma kimi xidmətlərdən
                                    pulsuz istifadə edəcəsiniz. Digər paketlərdə isə ödəniş edərək torpaq və su analizi,
                                    sahəniz üçün gübrələmə və dərmanlama proqramı, sahənizin peykdən görüntüsünü əldə
                                    edə bilərsiz. Bundan başqa daha çox bitki üçün büdcə hesablama və əkin planları alma
                                    imkanınız da olacaq. Həmçinin, proqram üzərindən aqranoma mesaj yaza və üzləşdiyiniz
                                    problemlərin fotoların göndərib bir başa aqranomdan rəy ala bilərsiniz.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">4</span>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        Dr. Agro nə dərəcədə dəqiq işləyir və aqranomun sahə səfərini əvəz edə bilərmi?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFour">
                                <div class="panel-body">
                                    Bəzi üzləşilən aqrar problemləri yerində görmək daha dəqiq olur. Lakin sizə təqdim
                                    olunan suallara verdiyiniz cavab problemi anlamaq üçün bir çox hallarda kifayət edir
                                    və proqramın üstünlüklərindən biri sayılan geniş aqranom komandası bir şəxsin
                                    yanaşmasından yarana biləcək riskləri azaldır. Çünki Dr. Agro aqranom komandası
                                    peşəkar və 10 ildən artıq təcrübəyə sahib ölkə daxilində və Avropada təhsil alan və
                                    təcrübə sahibi olan şəxslərdən ibarətdir.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">5</span>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Ödənişi necə edə bilərəm?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Dr. Agro-nun xidmətlərinin əksər hissəsi ödənişsizdir. Digər paketlər, xidmətlər və
                                    məhsullar almaq üçün ödəniş etməlisiniz. Bu halda siz tələb olunan məbləği e-manat
                                    köşklərinə yaxınlaşıb ekranda Digərləri qovluğunda olan Dr. Agro profilinə daxil
                                    olmaqla və ya internet üzərində <b>emanat.az</b> saytında qeydiyyatdan keçib online
                                    MasterCard, Visa kimi kartlarla da ödəyə bilərsiniz.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title relative">
                                    <span class="panel-number">5</span>
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Dr. Agro yerli xidmət şirkətidir?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Dr. Agro platforması NPC Agro şirkəti və Kənd Təsərrüfatı Nazirliyi ilə birgə
                                    əməkdaşlığı nəticəsində formalaşıb. NPC Agro şirkəti 2016-ci ildə Danimarka və
                                    Azərbaycanlı mütəxəssislər tərəfindən yaradılmışdır.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
