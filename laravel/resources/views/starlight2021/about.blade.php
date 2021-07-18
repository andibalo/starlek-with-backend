@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/aboutus.css')}}" />
    <style>
		#memoryLane {
  padding: 75px 0;
  padding-top: 200px;
  background-image: linear-gradient(
    to bottom,
    #1a0e10,
    #1a1116,
    #19151b,
    #18181e,
    #171b21
  );
}

#memoryLane .sectionTitle {
  font-weight: 600;
  color: var(--color-primary);
}

.timelineItemContainer {
  min-height: 500px;
  overflow: hidden;
}

.timeline {
  position: relative;
  padding: 0;
}

.timeline.timeline-end {
  padding-left: 0;
}

.timeline.timeline-end .line {
  width: 150%;
  right: 15px;
  left: -50%;
}

.timeline .line {
  position: absolute;
  height: 5px;
  background-color: var(--color-primary);
  width: 150%;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}

.timeline .circle {
  background-color: var(--color-primary);
  width: 15px;
  height: 15px;
  border-radius: 50%;
  position: relative;
}

.timeline.timelineNoPads {
  padding: 0;
}

.circle.withText::after {
  content: "2016";
  position: absolute;
  font-size: 20px;
  font-weight: 600;
  color: var(--color-primary);
  top: 30px;
  left: -90%;
}

.secondSlide .circle.withText::after {
  content: "2017";
}

.thirdSlide .circle.withText::after {
  content: "2018";
}

.fourthSlide .circle.withText::after {
  content: "2019";
}

.fifthSlide .circle.withText::after {
  content: "2020";
}

.imagesContainer {
  padding-top: 75px;
  padding-left: 0;
  padding-right: 0;
}

.imagesMobile {
  display: none;
}

.imageItemCol {
  padding-top: 15px;
  padding-bottom: 15px;
  min-height: 150px;
}

.imageItem {
  border-radius: 15px;
  overflow: hidden;
  filter: grayscale(1);
  transition: all 0.2s;
  cursor: pointer;
  height: 100%;
}

.imageItem:hover {
  filter: grayscale(0);
  box-shadow: 0 5px 15px #f5dcaf;
}

.imageItem .img {
  height: 100%;
  object-fit: cover;
}

.imageItemMobile {
  border-radius: 15px;
  overflow: hidden;
  height: 300px;
}

.imageItemMobile img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.imagesMobile .swiperMobile-pagination {
  display: flex;
  justify-content: center;
  padding: 15px 0;
}

.imagesMobile .swiperMobile-pagination .swiper-pagination-bullet-active {
  background: #e4132b !important;
  height: 8px;
  width: 8px;
}

.imagesMobile .swiperMobile-pagination .swiper-pagination-bullet {
  background: var(--color-primary);
  opacity: 1;
}
		
@media (max-width: 767px) {
  .timeline.timeline-end .line {
    left: initial;
  }

  .imagesMobile {
    display: block;
  }

  .timeline {
    padding: 0 15px;
  }

  .timeline .line {
    left: initial;
  }

  .imagesDesktop {
    display: none;
  }
}
</style>
@endsection

  @section('content')
  <!-- CONTENT -->
    <div id="memoryLane">
        <div class="mb-5">
          <h1 class="text-center sectionTitle">Memory Lane</h1>
        </div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="timelineItemContainer gen1">
                <div class="timeline container">
                  <div class="line"></div>
                  <div class="d-flex justify-content-between">
                    <div class="circle"></div>
                    <div class="circle withText"></div>
                    <div class="circle-none"></div>
                  </div>
                </div>
                <div class="imagesContainer container">
                  <div class="imagesMobile">
                    <div class="swiperMobile-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-1.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-2.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-3.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-4.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-5.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-6.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/gen1-7.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiperMobile-pagination"></div>
                    </div>
                  </div>

                  <div class="row justify-content-center imagesDesktop">
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-1.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-2.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-3.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-4.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-5.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-6.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/gen1-7.jpg')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2017 -->
            <div class="swiper-slide secondSlide">
              <div class="timelineItemContainer gen1">
                <div class="timeline timelineNoPads">
                  <div class="line"></div>
                  <div class="d-flex justify-content-between">
                    <div class="circle-none"></div>
                    <div class="circle withText"></div>
                    <div class="circle-none"></div>
                  </div>
                </div>
                <div class="imagesContainer container">
                  <div class="imagesMobile">
                    <div class="swiperMobile-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3955.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3956.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                 data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3957.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3958.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3959.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3960.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                 data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2017/IMG_3961.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiperMobile-pagination"></div>
                    </div>
                  </div>

                  <div class="row justify-content-center imagesDesktop">
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-2.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-3.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-4.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-5.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-6.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2017/O_v-7.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2018 -->
            <div class="swiper-slide thirdSlide">
              <div class="timelineItemContainer gen1">
                <div class="timeline timelineNoPads">
                  <div class="line"></div>
                  <div class="d-flex justify-content-between">
                    <div class="circle-none"></div>
                    <div class="circle withText"></div>
                    <div class="circle-none"></div>
                  </div>
                </div>
                <div class="imagesContainer container">
                  <div class="imagesMobile">
                    <div class="swiperMobile-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-1.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-2.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-3.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-4.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-5.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-6.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2018/2018-7.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiperMobile-pagination"></div>
                    </div>
                  </div>

                  <div class="row justify-content-center imagesDesktop">
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-2.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-3.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-4.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-5.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-6.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2018/O_v-7.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2019 -->
            <div class="swiper-slide fourthSlide">
              <div class="timelineItemContainer gen1">
                <div class="timeline timelineNoPads">
                  <div class="line"></div>
                  <div class="d-flex justify-content-between">
                    <div class="circle-none"></div>
                    <div class="circle withText"></div>
                    <div class="circle-none"></div>
                  </div>
                </div>
                <div class="imagesContainer container">
                  <div class="imagesMobile">
                    <div class="swiperMobile-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-2.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-3.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-4.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-5.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-6.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-7.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2019/2019-8.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiperMobile-pagination"></div>
                    </div>
                  </div>

                  <div class="row justify-content-center imagesDesktop">
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-2.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-3.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-4.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-5.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-6.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2019/O_v-7.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2020 -->
            <div class="swiper-slide fifthSlide">
              <div class="timelineItemContainer gen1">
                <div class="timeline timeline-end container">
                  <div class="line"></div>
                  <div class="d-flex justify-content-between">
                    <div class="circle-none"></div>
                    <div class="circle withText"></div>
                    <div class="circle"></div>
                  </div>
                </div>
                <div class="imagesContainer container">
                  <div class="imagesMobile">
                    <div class="swiperMobile-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-1.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-2.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-3.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-4.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-5.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-6.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="container">
                            <div class="text-white imageItemMobile">
                              <img
                                data-src="{{asset('./images/starlight2021/memory-lane-mobile-photo/2020/2020-7.jpg')}}"
                                class="img swiper-lazy"
                              />
                              <div class="swiper-lazy-preloader"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiperMobile-pagination"></div>
                    </div>
                  </div>

                  <div class="row justify-content-center imagesDesktop">
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-2.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-3.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-4.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-5.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-6.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                    <div class="col-3 imageItemCol">
                      <div class="imageItem text-white">
                        <img
                          src="{{asset('./images/starlight2021/memory-lane-preview-photo/2020/O_v-7.png')}}"
                          class="w-100 img"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <div class="background position-relative" style="background-image: url('{{ asset('images/starlight2021/bg-about.png') }}');">
        <div class="container mainContent">
          <div class="row">
            <div class="col-12 col-md-6">
              <img
                src="{{ asset('images/starlight2021/logo.png') }}"
                alt="Logo Starlight 2021"
                class="logo-content wow zoomIn"
				
              />
            </div>
            <div class="col-12 col-md-6">
              <div class="kanan">
                <h1 class="title wow fadeInUp" >ABOUT US</h1>
                <h4 class="semititle wow fadeInUp" >What is Starlight?</h4>
                <p class="paragraph wow fadeInUp" >
                  Starlight is one of the biggest events at the University of
                  Multimedia Nusantara which is held by the Multimedia Nusantara
                  University Student Executive Board (BEM UMN). Starlight has
                  become an annual event where students can compete by
                  performing and developing their ability through this event.
                  Starlight itself is also used as a promotional event for
                  Student Activity Units and Communities in every University and
                  High School.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="kiri">
                  <h4 class="tagline wow fadeInUp">Tagline Starlight 2021</h4>
                  <h2 class="title2 wow fadeInUp">RISE UP TO INFINITY</h2>
                  <p class="paragraph wow fadeInUp">
                    Through the words “RISE UP”, it will be an exclamation for
                    the committees and the performers to remember that this
                    year, Starlight 2021 will always make efforts to engage
                    people to rise from their worry. Why ‘TO INFINITY’?
                    According to this year’s theme INFINITE, this phrase will be
                    a motivation so that everything we are working on will
                    produce a creation that is limitless and continues to grow.
                    Lets #RISEUPTOINFINITY !
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h4 class="goals wow fadeInUp">GOALS</h4>
            <div class="row">
              <div class="col-6">
                <div class="rectangle wow fadeInUp">
                  <h4 class="visimisi ">VISI</h4>
                  <h4 class="text">
                    Menjadikan Starlight sebagai tempat bagi setiap peserta dan
                    panitia untuk bebas berkreasi dan mengembangkan diri.
                  </h4>
                </div>
              </div>
              <div class="col-6">
                <div class="rectangle wow fadeInUp" style="margin-right: auto;
    margin-left: 0;">
                  <h4 class="visimisi">MISI</h4>
                  <h4 class="text">
                    Menyediakan wadah bagi setiap individu yang ingin
                    menunjukkan bakat serta potensi yang mereka miliki.
                    Memperluas “target atau sasaran” sehingga Starlight dapat
                    lebih dikenal oleh banyak pihak.
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      @endsection

      @section('custom_js')
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    
      const swiper = new Swiper(".swiper-container", {
        // Optional parameters
        direction: "horizontal",
        loop: false,
		grabCursor:true,
        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
          el: ".swiper-scrollbar",
        },
      });

      const swiperMobile = new Swiper(".swiperMobile-container", {
        // Optional parameters
        direction: "horizontal",
        loop: false,
        slidesPerView: 1,
        centeredSlides: true,
        nested: true,
        spaceBetween: 50,
        preloadImages: false,
        // Enable lazy loading
        lazy: true,
        // If we need pagination
        pagination: {
          el: ".swiperMobile-pagination",
        },
      });
    </script>
@endsection
