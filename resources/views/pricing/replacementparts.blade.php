@extends('layouts.main')
@section('content')
<img src="{{asset('assets/img/Yurts-Builder-3d-part.png')}}" alt="" width="100%">
<div class="box-container limit-width">
    <!-- ***** SETTINGS ****** -->
    <section id="settings"> </section>
    <!-- ***** LOADING PAGE ****** -->
    <div id="spinner-area">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="spinner-txt">Antler...</div>
      </div>
    </div>
    <!-- ***** FRAME MODE ****** -->
    <div class="body-borders" data-border="20">
      <div class="top-border bg-white"></div>
      <div class="right-border bg-white"></div>
      <div class="bottom-border bg-white"></div>
      <div class="left-border bg-white"></div>
    </div>
    <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
    <header id="header"> </header>
    <!-- ***** BANNER ***** -->
    <div class="top-header item4 overlay scrollme">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
              <h1 class="heading">Spare Parts for Yurts : Complete Guide to Maintenance and Repair</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** KNOWLEDGEBASE ***** -->
    <section class="config cd-main-content pb-80 blog sec-bg2 motpath notoppadding bg-seccolorstyle">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 pt-80">
            <div id="sidebar_content" class="wrap-blog">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="wrapper targetDiv sec-grad-white-to-green noshadow bg-colorstyle">
                    <h1 class="mergecolor">Spare Parts for Yurts : Price Guide and Downloads</h1>
                    <p class="mergecolor">Important note: Pacific Yurts does not supply parts or accessories for structures we have not manufactured. Below are price downloads for various yurt components. This list is not exhaustive. If you require a specific part not listed here, please contact us directly for more information.</p>
                    <div class="row">
                      <div class="col-md-12 pt-4">
                        <div class="table-responsive-lg">
                          <table class="table compare">
                            <thead>
                              <tr class="seccolor">
                                <td>List</td>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="seccolor">
                                <td><a href="{{asset('assets/data/Parts-Pricing-Dome.pdf')}}" download="Parts-Pricing-Dome.pdf">REPLACEMENT PARTS - DOME SKYLIGHT</a></td>
                              </tr>
                              <tr class="seccolor">
                                <td><a href="{{asset('assets/data/Parts-Pricing-Doors.pdf')}}" download="Parts-Pricing-Doors.pdf">Parts Pricing Doors</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-12 pt-4">
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->
          <div class="col-md-12 col-lg-4">
            <aside id="sidebar" class="mt-80 sidebar sec-bg1 bg-colorstyle noshadow">
              <div class="ordersummary mt-0 mb-5">
                <h4 class="mergecolor">Price Guide and Downloads</h4>
                <div class="table-responsive-lg">
                  <table class="table">
                    <tbody>
                      <tr class="seccolor">
                        <td><div class="title-table">click on the links below</div></td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** HELP ***** -->
   
    <!-- ***** SMALL MODAL ***** -->
    <div class="modal fade" id="myModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Remove Item!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="mb-0">Are you sure you want to <b class="text-danger">remove</b> this item from your cart?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default-fill me-1" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-sm btn-default-purple-fill" data-bs-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->
    <footer id="footer"> </footer>
  </div>

@endsection