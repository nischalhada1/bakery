@extends('layouts.app')
@section('content')

<section>
  
    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
      <div class="cake-collection">
        <div class="row" style="padding-top: 100px; padding-bottom: 50px;">
          <div class="col-md-5">
              <div class="container">
                <!-- Gallery -->
                <div id="js-gallery" class="gallery">
  
                  <!--Gallery Hero-->
                  <div class="gallery__hero">
  
                    <img src="http://www.cakemandu.com.np/public/uploads/items/thumbs/default.png">
                  </div>
                  <!--Gallery Hero-->
  
                  <!--Gallery Thumbs-->
                  <div class="gallery__thumbs">
                                      </div>
                  <!--Gallery Thumbs-->
  
                </div><!--.gallery-->
                <!-- Gallery -->
                
               </div><!--.container-->
              
              
              
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12">
                <h2 class="cake-name">Rocomocca Cake</h2>
              </div>
              <h2 class="section-featured-cake-title offset" id="featured-cakes">Rs.680.</h2>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h4>Description:</h4>  
              </div>
              <div class="col-md-9">
                <h4>Coffee flavoured cake</h4>
              </div>
            </div>
  
            <form action="http://www.cakemandu.com.np/cart/add/8" method="post" id="form_send">
              <input type="hidden" name="_token" value="HOVemh3QfOnHvoEcjpu25tpg0XmAvZEkoHHOTZB3">
              
                          <div class="row">
                <div class="col-md-3">
                  <h4>General:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber1" class="subscriber">
                    
                      <section class="characters">
                                                                                                  <input class="input1" id="o1" type="checkbox" name="custom[]" value="cream decoration-0"><label for="o1">cream decoration(+0)</label>
                                                   
                              
                              
                           
                                                                                           </section>                    
                    
                  </div>
                </div>
              </div>
                                      <div class="row">
                <div class="col-md-3">
                  <h4>Chocolate:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber2" class="subscriber">
                    
                      <section class="characters">
                                                                                                                                                                                                                                                                                                                                </section>                    
                    
                  </div>
                </div>
              </div>
                          </br>
                                      <div class="row">
                <div class="col-md-3">
                  <h4>Fruit:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber3" class="subscriber">
                    
                      <section class="characters">
                                                                                                                                                                                                                                    </section>                    
                    
                  </div>
                </div>
              </div>
                                      <div class="row">
                <div class="col-md-3">
                  <h4>Type:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber4" class="subscriber">
                    
                      <section class="characters">
                                                                                                                                                                                                                                                                                                                                                                                                                            </section>                    
                    
                  </div>
                </div>
              </div>
                          </br>
                                      <div class="row">
                <div class="col-md-3">
                  <h4>Shape:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber5" class="subscriber">
                    
                      <section class="characters">
                                                                                                                                                                                                                                                                                                                                                                                                                            </section>                    
                    
                  </div>
                </div>
              </div>
                          </br>
                                      <div class="row">
                <div class="col-md-3">
                  <h4>Flavor:</h4> 
                  
                </div>
                <div class="col-md-9">
                    
                  <div id="subscriber6" class="subscriber">
                    
                      <section class="characters">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </section>                    
                    
                  </div>
                </div>
              </div>
                          </br>
                          
            <div class="row">
              <div class="col-md-3">
                <h4>Quantity(pounds):</h4>  
              </div>
              <div class="col-md-3">
                <input type="number" class="form-control" name="quantity" value="1">
              </div>
              <div class="col-md-3">
                <h5>Minimum quantity: 1 </h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <h4>Message:</h4>  
              </div>
              <div class="col-md-9">
                <input class="form-control input" type="text" placeholder="" name="message">
              </div>
            </div>
            <div class="row" style="margin-top: 10px;">
              <div class="col-md-offset-3 col-md-9" id="product-icon-container">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Add to Cart</button>
              </div>
            </div>
            </form>
            <div class="row">
              <div class="col-md-3"><h3 style="margin-top: 100px">Share With:</h3></div>
              <div class="col-md-9">
                <div class="container-fluid">
                  <div class="row" style="margin: 0px;">
                    <div class="col-md-12">
                      <div class="col-md-6">
                         <ul class="social">
                          <li class="facebook"><div data-href="http://www.cakemandu.com.np/family%20/rocomocca-cake/8" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.cakemandu.com.np/family%20/rocomocca-cake/8&amp;src=sdkpreparse"><i class="fa fa-facebook fa-3x"></i></a></div></li>
                          
                          
  
                          <li class="twitter"><a href="https://twitter.com/share"  data-show-count="false" target="blank"><i class="fa fa-twitter fa-3x"></i></a></li>
                          
                          <li class="google-plus"><a href="https://plus.google.com/share?url=http://www.cakemandu.com.np/family%20/rocomocca-cake/8" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-official fa-3x"></i></a></div></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div> 
  </section>
  