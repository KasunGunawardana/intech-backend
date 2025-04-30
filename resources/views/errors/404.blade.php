@extends('front.layouts.app')

@section('title')
Content not found
@endsection

@section('meta_description')
{{ $companyDetails->company_name }} has been founded with the Nobel vision of creating innovative multitalented professionals in the area of IT/ Business/Engineering and Biomedical sciences while enabling them to develop core competencies & skills towards the highly sophisticated professional carrier.
@endsection

@section('keywords')
404
@endsection

@section('content')

  <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4>Page Not Found!</h4>
                            <h1>404</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <section class="commonSection ab_agency">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="main-div" style=" text-align: center; padding: 2% 0; color: rgb(68, 68, 68); font: normal 14px/20px Arial, Helvetica, sans-serif; ">
            <p class="para-1" style=" font-size: 150px; line-height: 150px; font-weight: bold; margin: 0px;">404</p>
            <p class="para-2" style="margin-top: 20px; font-size: 30px; margin: 0px;">Not Found</p>
            <p class="para-3">The resource requested could not be found on this server!</p>
            <a href="{{ URL::to('/' ); }}" title="Click to visit">Return to the homepage</a>
        </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection

@section('scripts')

@endsection
