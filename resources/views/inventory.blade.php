@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Inventory | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ url('_site-assets/images/inventory.jpeg') }});">
    <div class="container">
      <h1 class="page-title">Inventory</h1>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Inventory</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Body Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <!-- Search Filters -->
          <div class="col-md-3 search-filters" id="Search-Filters">
            <div class="tbsticky filters-sidebar">
              <form method="POST" action="/filter-inventory">
                @csrf
                <h3>Refine Search</h3>
                <div class="accordion" id="toggleArea">
                  <!-- Filter by Year -->
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Year<i class="fa fa-angle-down"></i> </a> </div>
                    <div id="collapseOne" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div class="form-inline">
                            <div class="form-group">
                              <label>Min Year</label>
                              <select name="minyear" class="form-control selectpicker">
                                <option selected value="any">Any</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2014">2015</option>
                                <option value="2014">2016</option>
                                <option value="2014">2017</option>
                                <option value="2014">2018</option>
                                <option value="2014">2019</option>
                                <option value="2014">2020</option>
                                <option value="2014">2021</option>
                                <option value="2014">2022</option>
                              </select>
                            </div>
                            <div class="form-group last-child">
                              <label>Max Year</label>
                              <select name="maxyear" class="form-control selectpicker">
                                  <option selected value="any">Any</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2019">2020</option>
                                  <option value="2019">2021</option>
                                  <option value="2019">2022</option>
                              </select>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div> <!-- / Filter by year -->
                  <!-- Filter by Make -->
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Make<i class="fa fa-angle-down"></i> </a> </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <ul class="filter-options-list list-group">
                          @foreach($makes as $mk)
                            <li class="list-group-item" style="margin-top: 5px;">
                              <input type="checkbox" name="makes[]" value="{{ $mk->make }}" style="margin-right:3px; margin-top: -1px;">
                              <span class="badge">{{ $mk->total }}</span>{{ $mk->make }}
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div><!-- / Filter by make -->
                  <!-- Filter by Mileage -->
                  <div class="accordion-group">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive">Mileage <i class="fa fa-angle-down"></i> </a> </div>
                    <div id="collapseFive" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div class="form-inline">
                          <div class="form-group last-child">
                            <label>Max Mileage</label>
                            <select name="maxmileage" class="form-control selectpicker">
                              <option selected value="any">Any</option>
                              <option value="50000">50,00 km</option>
                              <option value="75000">75,000 km</option>
                              <option value="100000">100,00 km</option>
                              <option value="150000">150,00 km</option>
                              <option value="200000">200,00 km</option>
                              <option value="250000">250,00 km</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- / Filter by mileage -->

                  <!-- Filter by Price -->
                  <div class="accordion-group">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Price <i class="fa fa-angle-down"></i> </a> </div>
                    <div id="collapseEight" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div class="form-inline">
                          <div class="form-group last-child">
                            <label>Price Max</label>
                            <select name="maxprice" class="form-control selectpicker">
                              <option selected value="any">Any</option>
                              <option value="5000">$5,000</option>
                              <option value="10000">$10,000</option>
                              <option value="20000">$20,000</option>
                              <option value="30000">$30,000</option>
                              <option value="40000">$40,000</option>
                              <option value="50000">$50,000</option>
                              <option value="100000">$100,000</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- / Filter by price -->
                </div><!-- End Toggle -->
                <a href="/inventory" class="btn-default btn-sm btn"><i class="fa fa-refresh"></i> Reset search</a>
                <button type="submit" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Run search</button>
              </form>
            </div>
          </div>

          <!-- Listing Results -->
          <div class="col-md-9 results-container">
            <div class="results-container-in">
              <div id="results-holder" class="results-list-view">
                @foreach($inventory as $vehicle)
                  <!-- Result Item -->
                  <div class="result-item format-standard">
                    <div class="result-item-image">
                      @if(count($vehicle->images) > 0)
                        <a href="/vehicle/{{ $vehicle->id }}" class="media-box"><img src="{{ url('storage/images/' . $vehicle->images[0]->src) }}" alt=""></a>
                        <span class="label label-default vehicle-age">{{ $vehicle->stock_num }}</span>
                      @else
                        <a href="/vehicle/{{ $vehicle->id }}" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                        <span class="label label-default vehicle-age">{{ $vehicle->stock_num }}</span>
                      @endif
                    </div>
                    <div class="result-item-in">
                      <h4 class="result-item-title"><a href="/vehicle/{{ $vehicle->id }}">{{ $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model }}</a></h4>
                      <div class="result-item-cont">
                        <div class="result-item-block col1">
                          <p></p>
                        </div>
                        <div class="result-item-block col2">
                          <div class="result-item-pricing">
                            @if($vehicle->price != 0)
                              <div class="price">${{ number_format($vehicle->price) }}</div>
                            @elseif($vehicle->price == 0)
                              <div class="price">Contact us</div>
                            @endif
                          </div>
                          <div class="result-item-action-buttons">

                          </div>
                        </div>
                      </div>
                      <div class="result-item-features">
                        <ul class="inline">
                          @if($vehicle->trim != null)
                            <li>{{ $vehicle->trim }}</li>
                          @endif
                          <li>{{ number_format($vehicle->kms) }} km</li>
                          <li>{{ $vehicle->trans }}</li>
                          <li>{{ $vehicle->vin }}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <hr class="fw">
              <div style="text-align:center;">
                @if($inventory  instanceof \Illuminate\Pagination\LengthAwarePaginator)
                  {{ $inventory->links() }}
                @endif
              </div>
            </div>
          </div><!-- / Listing results -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Body Content -->


@endsection
