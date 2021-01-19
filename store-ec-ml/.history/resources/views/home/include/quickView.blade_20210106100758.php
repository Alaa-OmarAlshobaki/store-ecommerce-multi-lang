<div id="quick-view-popup-{{ $item->id }}" style="display: none ;    padding: 40px;">
  
            <div class="qv-wrap">
                <div class="row product">
                    <div class="col-md-6 col-sm-6 image pdt-single-slider">
                        <div class="product-thumb-slider layout-btm-thumb">
                            <div class="slide-top">
                                <ul class="qv-single-image single-2">
                                    @isset($item)
                                    @foreach($item->image as $data)
                                    <li>
                                        <figure><img src="{{ $data->photo }}" alt=""></figure>
                                    </li>
                                    @endforeach
                                    @endisset
                                  
                                </ul>
                            </div>
        
                            <ul class="qv-single-thumb thumb-2">
                                    @isset($item)
                                    @foreach($item->image as $data)
                                    <li>
                                        <figure><img src="{{ $data->photo }}" alt=""></figure>
                                    </li>
                                    @endforeach
                                    @endisset
                            </ul>
                        </div>
                    </div>
                    <!--slider-->
        
                    <!--summery-->
                </div>
            </div>
 
</div>
<!--quick view-->