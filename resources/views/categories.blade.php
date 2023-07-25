
@extends('layouts.main')
@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
          </ol>
          <h2>Categories</h2>
        </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row">
            @foreach ($categories as $category )
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="/categories/{{ $category->slug }}">{{ $category->name }}<a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Services Section -->
@endsection

