@extends('landing.layouts.app')
@section('title')
{{ isset($title) ? $title : "Dimz | Portofolio Website"; }}
@endsection
@section('style')
<style>
    .more {
        display: none;
    }
</style>
@endsection
@section('content')
<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-banner-content">
                    <h1>Project Portofolio</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Banner End ====== -->
<!-- ====== Blog Start ====== -->
<section class="ud-blog-grids">
    <div class="container">
        <div class="row">
            @forelse($data as $data_project)
            <div class="col-lg-4 col-md-6">
                <div class="ud-single-blog">
                    <div class="ud-blog-image">
                        <a href="#">
                            <img src="{{ url('storage/data/image/project/'.$data_project->images) }}"
                                alt="{{ $data_project->images }}"
                                style="width:416px;height:300px;object-fit:cover;object-position:center" />
                        </a>
                        <!-- Modal -->

                    </div>
                    <div class="ud-blog-content">
                        <span class="ud-blog-date">{{
                            Carbon\Carbon::parse($data_project->date)
                            ->locale('id')
                            ->settings(['formatFunction' => 'translatedFormat'])
                            ->format('l, j F Y');
                            }}</span>
                        <div class="col-md-12">
                            @forelse($data_project->detail_projects as $detail)
                            <span class="ud-blog-date"
                                style="background-color: <?php echo $detail->color ?>;text-transform:uppercase;">
                                {{ $detail->language }}
                            </span>
                            @empty
                            <span class="ud-blog-date" style="background-color: gray;">
                                UNKNOWN LANGUAGE
                            </span>
                            @endforelse
                            @if($data_project->type == "fe")
                            <span class="ud-blog-date" style="background-color: #42b984">FRONTEND</span>
                            @elseif($data_project->type == "be")
                            <span class="ud-blog-date" style="background-color: #d9660c">BACKEND</span>
                            @elseif($data_project->type == "fs")
                            <span class="ud-blog-date" style="background-color: #008ad2">FULLSTACK</span>
                            @else
                            <span class="ud-blog-date" style="background-color: gray;">UNKNOWN TYPE</span>
                            @endif
                            @if($data_project->status == "public")
                            <span class="ud-blog-date" style="background-color: blue">PUBLIC</span>
                            @elseif($data_project->status == "private")
                            <span class="ud-blog-date" style="background-color: red;">PRIVATE</span>
                            @else
                            <span class="ud-blog-date" style="background-color: gray;">UNKNOWN STATUS</span>
                            @endif
                        </div>
                        <h3 class="ud-blog-title">
                            <a href="{{ $data_project->github }}" target="_blank" style="text-transform:capitalize;">
                                {{ $data_project->title }}
                            </a>
                        </h3>
                        <p class="ud-blog-desc" style="text-align:justify;">
                            <span id="limitbtnmore{{ $data_project->id }}">
                                <a onclick="seeMore(this.id)" id="btnmore{{ $data_project->id }}"
                                    style="cursor:pointer;">
                                    {{
                                    $word_limit = Str::limit($data_project->description, 150)
                                    }}
                                </a>
                            </span>
                            <span id="morebtnmore{{ $data_project->id }}" class="more">
                                <a onclick="seeLess(this.id)" id="btnless{{ $data_project->id }}"
                                    style="cursor:pointer;">
                                    {{ $data_project->description }}
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-4 col-md-6">
                <div class="ud-single-blog">
                    <div class="ud-blog-image">
                        <a href="#">
                            <img src="{{ asset('portofolio/assets/images/project/login_ecommerce.png')}}"
                                alt="login_ecommerce"
                                style="width:416px;height:300px;object-fit:cover;object-position:center" />
                        </a>
                        <!-- Modal -->

                    </div>
                    <div class="ud-blog-content">
                        <span class="ud-blog-date">Nov 01, 2022</span>
                        <div class="col-md-12">
                            <span class="ud-blog-date" style="background-color: #902722;">LARAVEL</span>
                            <span class="ud-blog-date" style="background-color: #4f5b93;">PHP</span>
                            <span class="ud-blog-date" style="background-color: #7b12f5">BOOTSTRAP</span>
                            <span class="ud-blog-date" style="background-color: #42b984">FRONTEND</span>
                            <span class="ud-blog-date" style="background-color: #d9660c">BACKEND</span>
                            <span class="ud-blog-date" style="background-color: #008ad2">FULLSTACK</span>
                            <span class="ud-blog-date" style="background-color: blue">PUBLIC</span>
                            <span class="ud-blog-date" style="background-color: red;">PRIVATE</span>
                        </div>
                        <h3 class="ud-blog-title">
                            <a href="https://github.com/dimazivan/Website-Ecommerce-Laravel" target="_blank">
                                Aplikasi E-Commerce berbasis website.
                            </a>
                        </h3>
                        <p class="ud-blog-desc">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- ====== Blog End ====== -->
@endsection
@section('script')
<script>
    function seeMore(id) {
        // alert('ahay1');
        var moreText = document.getElementById("limit" + id);
        var limitText = document.getElementById("more" + id);
        var btnMore = document.getElementById(id);

        console.log(id);
        console.log(moreText);
        console.log(limitText);
        console.log(btnMore);
        console.log(limitText.style.display === "");

        if (limitText.style.display === "" || limitText.style.display === "none") {
            limitText.style.display = "inline";
            moreText.style.display = "none";
        }
    }

    function seeLess(id) {
        // alert('ahay2');
        var id_copy = id;
        var newid = id_copy.replace("btnless", "btnmore");
        var moreText = document.getElementById("limit" + newid);
        var limitText = document.getElementById("more" + newid);
        var btnLess = document.getElementById(id);

        console.log(id);
        console.log(newid);
        console.log(btnLess);
        console.log(moreText);
        console.log(limitText);

        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            limitText.style.display = "none";
        }
    }
</script>
@endsection