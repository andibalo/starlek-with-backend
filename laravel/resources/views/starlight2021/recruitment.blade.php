@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.0/dist/sweetalert2.min.css"
      integrity="sha256-T6HZvS0Md0zKQDaru/XZ9R8g71Gw/HDaDyafxrOd76I="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/recruitment.css')}}" />

    <style>
		
.mainText {
    font-size: 4rem;
}
		
		.cardOutline {
  border: 3px solid transparent;
  border-radius: 30px;
  box-sizing: content-box;
  transition: all 0.3s;
}

.card {
  cursor: pointer;
  min-height: 380px;
  border-radius: 30px;
  background-color: #3b2e54;

  background-size: cover;
  background-position: center;
  padding: 30px;
  position: relative;
  color: white;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease-out;
}

#page .card.isFlipped {
  background-image: linear-gradient(
    to bottom,
    #1a0e10,
    #1a1116,
    #19151b,
    #18181e,
    #171b21
  );
}

.card.aquila {

  background-image: url("../../../images/starlight2021/cards/Aquila.png");
}

.card.auriga {
  background-image: url("../../../images/starlight2021/cards/Auriga.png");
}

.card.corvus {
  background-image: url("../../../images/starlight2021/cards/Corvus.png");
}

.card.cygnus {
  background-image: url("../../../images/starlight2021/cards/Cygnus.png");
}

.card.delphinus {
  background-image: url("../../../images/starlight2021/cards/Delphinus.png");
}

.card.draco {
  background-image: url("../../../images/starlight2021/cards/Draco.png");
}

.card.eridanus {
  background-image: url("../../../images/starlight2021/cards/Eridanus.png");
}

.card.fornax {
  background-image: url("../../../images/starlight2021/cards/Fornax.png");
}

.card.lyra {
  background-image: url("../../../images/starlight2021/cards/Lyra.png");
}

.card.pyxis {
  background-image: url("../../../images/starlight2021/cards/Pyxis.png");
}

.card.sagitta {
  background-image: url("../../../images/starlight2021/cards/Sagitta.png");
}

.nameList h4 {
  font-size: 1rem;
}

.cardOutline:hover {
  transform: translateY(-5px);
  border-color: #f5dcaf;
  box-shadow: 0 5px 15px #f5dcaf;
}

.card-inner {
  flex: 1;
  position: relative;
  color: #f5dcaf;
}

.nameList li {
  display: flex;
  justify-content: space-between;
}

.nameList li p {
  margin-bottom: 0;
}

.front {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.front,
.back {
  transition: all 0.3s ease-out;
}

.front h3,
.back h3,
.back p {
  font-weight: 600;
}

.card .back,
.card.isFlipped .front {
  opacity: 0;
}

.card.isFlipped .back,
.card .front {
  opacity: 1;
}

.card ul {
  list-style-type: none;
  padding: 0;
  margin-top: 35px;
}

.starcitizen {
  overflow: hidden;
  padding-top: 15px;
  padding-bottom:15px;
}

/*#starCitizen .swiper-container {
  padding-top: 35px;
	
}*/

.content {
  position: relative;
}

.starcitizen .swiper-pagination {
  display: none;
  bottom: -5px !important;
}

.starcitizen .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #e4132b;
}

#starCitizen .swiper-button-prev {
  left: -50px;
}

#starCitizen .swiper-button-next {
  right: -50px;
}
		
.cardOutline {
    max-width: 300px;
    margin: auto;
  }
		 .nameList li p:first-child {
    margin-right: 15px;
  }

		@media(max-width:960px){
		
			#starCitizen .swiper-button-prev {
    			left: -30px;
			}
			
			#starCitizen .swiper-button-next {
    			right: -30px;
			}
		}
		
@media (max-width: 767px) {
    .mainText {
        text-align: center;
        font-size: 2.5rem;
    }

    #countdown li span {
        font-size: 2rem;
    }

    #countdown li {
        font-size: 1rem;
    }
	
	.divisionContent{
		font-size:0.85rem;
		text-align:justify;
	}
	
	.jobDescCont {
		text-align:center;
	}

    .footer .logo {
        margin: auto;
    }

    .footerLinks .footerLink {
        flex: 0 0 100%;
        text-align: center;
    }

    .socialLinks {
        justify-content: center;
    }

    .footer .address {
        text-align: center;

        padding-left: 3rem;
        padding-right: 3rem;
    }

    .footer .col-inner {
        margin-bottom: 50px;
    }

    .logoGroup {
        justify-content: center;
    }
	
  .content {
    max-width: 368px;
   
  }
			
 
  #starCitizen .swiper-pagination {
    display: block;
  }
 
}

@media (max-width: 460px) {
    #countdown li {
        padding: 0.3rem;
    }
	
	 #starCitizen .swiper-button-prev {
    display: none;
  }
  #starCitizen .swiper-button-next {
    display: none;
  }
 
}
</style>
  </head>
@endsection

  @section('content')
  <!-- CONTENT -->
  <div
        class="main  d-flex justify-content-center align-items-center"
        style="background-image: url('{{ asset('images/starlight2021/bg-recruitment.png') }}');"
      >
         <div
          class="mainContent"
         
        >
			 <br/> <br/> <br/> <br/> <br/> <br/> <br/>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/7WnZmtlSWDg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 <iframe width=700 height=600 src="https://www.youtube.com/live_chat?v=7WnZmtlSWDg&embed_domain=starlight.umn.ac.id"></iframe>
			
          <div class="text-center">
            <h1
              class="mainText wow fadeInUp"
              data-wow-delay="3s"
             
            >
              Citizens Of Starcity
            </h1>
          </div>

          <div class="container content  " id="starCitizen"  
        
        >
            <div class="starcitizen">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="cardOutline wow fadeInUp"   data-wow-delay="3500ms">
                    <div class="card aquila">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Aquila</h3>
                          <ul class="nameList">
                            <li>
                              <p>Alexandra C. Sutandar</p>
                              <p>45105</p>
                            </li>
                            <li>
                              <p>Armando Jeremia</p>
                              <p>36193</p>
                            </li>
                            <li>
                              <p>Devin Edsel</p>
                              <p>43068</p>
                            </li>
                            <li>
                              <p>Gabriella C. Iskandar</p>
                              <p>45840</p>
                            </li>
                            <li>
                              <p>Alviandi Soesanto</p>
                              <p>51517</p>
                            </li>
                            <li>
                              <p>Andhika B. Wijaksara</p>
                              <p>35923</p>
                            </li>
                            <li>
                              <p>Jonathan D. S. Prajitno</p>
                              <p>45663</p>
                            </li>
                            <li>
                              <p>Michael F. Tjeng</p>
                              <p>36271</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline wow fadeInUp"   data-wow-delay="3600ms">
                    <div class="card auriga">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Auriga</h3>
                          <ul class="nameList">
                            <li>
                              <p>Andreas Saut</p>
                              <p>38265</p>
                            </li>
                            <li>
                              <p>Faqih A. Muty</p>
                              <p>48226</p>
                            </li>
                            <li>
                              <p>Lusiani Febrianti</p>
                              <p>42622</p>
                            </li>
                            <li>
                              <p>Necoles</p>
                              <p>42589</p>
                            </li>
                            <li>
                              <p>Ratujesya A. Yasin</p>
                              <p>31258</p>
                            </li>
                            <li>
                              <p>Samuel Marfinus</p>
                              <p>42647</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline wow fadeInUp"   data-wow-delay="3700ms">
                    <div class="card corvus">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Corvus</h3>
                          <ul class="nameList">
                            <li>
                              <p>Charlie Frederico</p>
                              <p>43442</p>
                            </li>
                            <li>
                              <p>Fernando Khorasani</p>
                              <p>43088</p>
                            </li>
                            <li>
                              <p>Grivia T. Iskandar</p>
                              <p>36794</p>
                            </li>
                            <li>
                              <p>Lifosmin Simon</p>
                              <p>45574</p>
                            </li>
                            <li>
                              <p>Thomas J. Uspari</p>
                              <p>46001</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card cygnus">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Cygnus</h3>
                          <ul class="nameList">
                            <li>
                              <p>Cut K. Hayati</p>
                              <p>39872</p>
                            </li>
                            <li>
                              <p>Michelle Yonathan</p>
                              <p>39874</p>
                            </li>
                            <li>
                              <p>Yosa E. Damayanti</p>
                              <p>37689</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card delphinus">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Delphinus</h3>
                          <ul class="nameList">
                            <li>
                              <p>Hani Nathania</p>
                              <p>35756</p>
                            </li>
                            <li>
                              <p>Janice Sintadi</p>
                              <p>43343</p>
                            </li>
                            <li>
                              <p>Marcelina Tjahya</p>
                              <p>44034</p>
                            </li>
                            <li>
                              <p>Michelle</p>
                              <p>48144</p>
                            </li>
                            <li>
                              <p>Michelle Octaviana</p>
                              <p>43235</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card draco">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Draco</h3>
                          <ul class="nameList">
                            <li>
                              <p>Aljevan Komala</p>
                              <p>44016</p>
                            </li>
                            <li>
                              <p>Amelia Septika</p>
                              <p>46902</p>
                            </li>
                            <li>
                              <p>Christabel E. Widjaja</p>
                              <p>37672</p>
                            </li>
                            <li>
                              <p>Valentino B. E. Malo</p>
                              <p>44596</p>
                            </li>
                            <li>
                              <p>Vincent Gabriel</p>
                              <p>43052</p>
                            </li>
                            <li>
                              <p>Vinsensius A. Cahyadi</p>
                              <p>42526</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card eridanus">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Eridanus</h3>
                          <ul class="nameList">
                            <li>
                              <p>Juan F. Lainsamputty</p>
                              <p>48442</p>
                            </li>
                            <li>
                              <p>Reyulio M. Oetomo</p>
                              <p>44050</p>
                            </li>
                            <li>
                              <p>Stephanie Shannonly</p>
                              <p>43820</p>
                            </li>
                            <li>
                              <p>Tralya Dharmada</p>
                              <p>44343</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card fornax">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Fornax</h3>
                          <ul class="nameList">
                            <li>
                              <p>Jesslyn Alvina</p>
                              <p>45710</p>
                            </li>
                            <li>
                              <p>Michelle Putri</p>
                              <p>42795</p>
                            </li>
                            <li>
                              <p>Yulius Kurniadi</p>
                              <p>34657</p>
                            </li>
                            <li>
                              <p>Sheyren F. Tany</p>
                              <p>33959</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card lyra">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Lyra</h3>
                          <ul class="nameList">
                            <li>
                              <p>Cevo Kristianto</p>
                              <p>37046</p>
                            </li>
                            <li>
                              <p>Kalton S. Pokke</p>
                              <p>34841</p>
                            </li>
                            <li>
                              <p>Michelle Mamuaya</p>
                              <p>44971</p>
                            </li>
                            <li>
                              <p>Theressa N. Taslim</p>
                              <p>45088</p>
                            </li>
                            <li>
                              <p>Tiara Putri</p>
                              <p>46125</p>
                            </li>
                            <li>
                              <p>William Wei</p>
                              <p>43169</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card pyxis">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Pyxis</h3>
                          <ul class="nameList">
                            <li>
                              <p>Benita K. Suhendra</p>
                              <p>45772</p>
                            </li>
                            <li>
                              <p>Gabriela E. Purmono</p>
                              <p>44792</p>
                            </li>
                            <li>
                              <p>Jenaya G. Loen</p>
                              <p>50916</p>
                            </li>
                            <li>
                              <p>Katherine A. Lius</p>
                              <p>44462</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="cardOutline">
                    <div class="card sagitta">
                      <div class="card-inner">
                        <div class="front"></div>
                        <div class="back">
                          <h3>Sagitta</h3>
                          <ul class="nameList">
                            <li>
                              <p>Aloysius T. D. Harun</p>
                              <p>41677</p>
                            </li>
                            <li>
                              <p>Aurelia F. Bunardi</p>
                              <p>33793</p>
                            </li>
                            <li>
                              <p>Fransiskus A. Salim</p>
                              <p>37020</p>
                            </li>
                            <li>
                              <p>Silviria Yessica</p>
                              <p>34232</p>
                            </li>
                            <li>
                              <p>Stephanie E. Gunawan</p>
                              <p>42677</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <i
            class="fas fa-2x fa-angle-double-down downArrow"
            data-target="divisions"
          ></i>
        </div>
      </div>
      <section id="divisions" class="section">
        <div class="content container">
          <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Documentation</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Aquila600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Aquila adalah rasi bintang yang terletak di langit bagian
                      utara yang dalam bahasa Latin berarti elang. Elang adalah
                      burung yang dikenal memiliki penglihatan yang tajam dan
                      juga cakar yang sangat kuat untuk dapat menangkap
                      mangsanya.
                    </p>
                    <p>
                      Hal ini mencerminkan divisi Documentation yang siap untuk
                      mencari momen-momen seru dengan penglihatannya yang tajam,
                      serta fokus menangkap dan mengabadikan setiap rangkaian
                      kegiatan Starlight 2021.
                    </p>

                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Membuat konten untuk mengabadikan momen dalam bentuk
                        foto, video, dan motion graphics selama Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Logistic & Multimedia</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Auriga600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Auriga adalah suatu rasi bintang di belahan utara. Namanya
                      adalah bahasa Latin dari kusir kereta perang. Pada situasi
                      perang yang sulit, Auriga selalu berjaga dan gesit dalam
                      mengantar baik tentara maupun barang-barang keperluan
                      peperangan.
                    </p>
                    <p>
                      Oleh karena itu, Auriga mencerminkan divisi Logistic and
                      Multimedia yang siap untuk berperan sebagai penyedia
                      berbagai kebutuhan dalam seluruh rangkaian acara Starlight
                      2021.
                    </p>

                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Mengatur segala bentuk persiapan, pemindahan,
                        penyimpanan, pengadaan dan pemeliharaan barang atau
                        peralatan secara teknis selama acara Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Website</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Corvus600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Corvus adalah rasi bintang kecil di belahan selatan.
                      Namanya merupakan bahasa Latin dari burung gagak. Burung
                      Gagak merupakan burung yang memiliki tingkat kecerdasan
                      yang sangat tinggi.
                    </p>
                    <p>
                      Jenis burung ini melambangkan divisi Website yang dapat
                      membaca dan menyusun kode-kode yang dianggap terperinci
                      dan teliti perihal kebutuhan website Starlight 2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Merancang konsep website Starlight sesuai dengan tema
                        Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Media Partnership</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Cygnus600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Cygnus adalah konstelasi utara yang terletak di bidang
                      Bima Sakti, namanya berasal dari kata Yunani Latin untuk
                      angsa. Cygnus mencerminkan divisi Media Partnership yang
                      siap untuk mencari dan menjalin kerja sama dengan berbagai
                      media partner untuk mendukung seluruh rangkaian acara
                      Starlight 2021.
                    </p>
                    <p>
                      Angsa juga melambangkan hubungan yang harmonis, di mana
                      divisi Media Partnership dapat mempertahankan hubungan
                      yang baik dan harmonis dengan berbagai Media yang bekerja
                      sama untuk mempromosikan rangkaian acara Starlight 2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Mencari rekan kerjasama media, organisasi, dan lainnya
                        untuk menyebarluaskan informasi mengenai Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">PR & Marketing</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Delphinus600.png') }}" /> 
                  </div>
                  <div class="divisionContent">
                    <p>
                      Delphinus adalah sebuah rasi bintang yang terletak di
                      belahan langit utara yang dalam bahasa Latin berarti
                      lumba-lumba. Delphinus melambangkan divisi PR & Marketing
                      yang siap menjadi jembatan dalam hubungan dan komunikasi
                      antara pihak internal dengan pihak eksternal di Starlight
                      2021.
                    </p>
                    <p>
                      Serta dapat mempromosikan pesan secara cerdas dan ramah
                      sehingga dapat menarik pihak eksternal untuk dapat
                      berpartisipasi dalam rangkaian kegiatan Starlight 2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Merancang dan memproduksi konten di sosial media serta
                        membuat konsep strategi marketing untuk mempromosikan
                        Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Insurer</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Draco600.png') }}" />                  
                  </div>
                  <div class="divisionContent">
                    <p>
                      Draco adalah sebuah rasi bintang di langit utara jauh.
                      Namanya berasal dari bahasa Latin yang berarti naga. Draco
                      merupakan naga yang bertugas untuk menjaga pohon apel emas
                      yang sangat berharga milik Hesperides, dari segala
                      kejahatan oleh pihak luar.
                    </p>
                    <p>
                      Draco yang tidak pernah terbenam mencerminkan divisi
                      Insurer yang selalu siap sedia untuk menjaga keamanan dan
                      ketertiban seluruh rangkaian acara Starlight 2021, baik
                      panitia, peserta, maupun pihak lain yang terkait.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Menjaga keamanan dan ketertiban selama keseluruhan
                        rangkaian acara Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Fresh Money</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Eridanus600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Eridanus adalah rasi bintang di belahan bumi selatan yang
                      melambangkan sungai-sungai besar di bumi. Sungai juga
                      dimaknai sebagai sumber kehidupan, perantara transportasi
                      & perdagangan, dan lain-lain.
                    </p>
                    <p>
                      Hal ini juga melambangkan divisi Fresh Money yang selalu
                      siap untuk mencari dana sebagai sumber pemasukan yang
                      dapat menghidupkan seluruh rangkaian kegiatan Starlight
                      2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Bertugas untuk menggalang dana demi keberlangsungan
                        acara Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Event</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Fornax600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Fornax adalah sebuah rasi bintang yang terletak di belahan
                      langit selatan. Berbentuk seperti tungku yang menghasilkan
                      api, yang digambarkan sebagai semangat yang dimiliki oleh
                      divisi event.
                    </p>
                    <p>
                      Ide-ide yang dihasilkan divisi event akan selalu fresh,
                      mencairkan suasana, dan dapat membangkitkan semangat
                      divisi lain dan peserta Starlight 2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Membuat konsep dan alur berlangsungnya rangkaian acara
                        Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Visual</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Lyra600.png') }}" />                 
                  </div>
                  <div class="divisionContent">
                    <p>
                      Lyra adalah sebuah rasi bintang kecil yang menonjol di
                      langit utara yang dalam bahasa Latin berarti harpa. Dalam
                      mitologinya, Lyra merupakan alat musik yang dimainkan oleh
                      Orpheus.
                    </p>
                    <p>
                      Permainan harpa tersebut sangat indah sehingga dapat
                      menyentuh hati orang-orang di sekitarnya untuk
                      mendengarkan dan menjadi tertarik dengan permainannya.
                      Sama halnya dengan divisi Visual yang dengan
                      kreativitasnya, dapat memperindah visual dari Starlight
                      2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Membuat dan menyediakan asset visual terkait rancangan
                        kegiatan Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Liaison Officer</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Pyxis600.png') }}" />                  
                  </div>
                  <div class="divisionContent">
                    <p>
                      Pyxis adalah rasi bintang kecil yang ada di langit
                      selatan. Dalam bahasa Latin, namanya berarti kompas
                      pelaut. Kompas merupakan alat navigasi yang digunakan
                      sebagai penunjuk arah bagi manusia, sehingga membuat
                      perjalanan lebih aman dan juga terarah dengan baik.
                    </p>
                    <p>
                      Pyxis mencerminkan divisi Liaison Officer yang siap untuk
                      menemani perjalanan para peserta Starlight 2021.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Menjadi pendamping dan jembatan antara peserta dengan
                        pihak Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-content">
                  <h3 class="text-center">Sponsorship</h3>
                  <div class="divisionLogo mx-auto my-3 mb-4">
                     <img src="{{ asset('images/starlight2021/division/Sagitta600.png') }}" />
                  </div>
                  <div class="divisionContent">
                    <p>
                      Sagitta adalah rasi bintang yang terdapat di langit utara.
                      Konstelasinya memiliki bentuk anak panah. Anak panah
                      merupakan senjata yang digunakan untuk menembak targetnya.
                    </p>
                    <p>
                      Hal ini mencerminkan divisi Sponsorships yang memiliki
                      jangkauan luas dalam mencari sponsor yang tepat, seperti
                      anak panah yang menembak targetnya dengan tepat. Bantuan
                      dari berbagai perusahaan tentunya untuk mendukung
                      rangkaian acara Starlight 2021 secara finansial.
                    </p>
                    <div class="mt-4 jobDescCont">
                      <p class="jobDesc">Job Description</p>
                      <p>
                        Mencari sponsor, baik dari pihak eksternal maupun
                        internal, yang bersedia untuk bekerja sama dengan
                        Starlight 2021.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>
    
      @endsection

      @section('custom_js')
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
       $(() => {
	      /*setTimeout(() => {
          let alertContent = `
            <div class="alertContent" style="margin-top:1.5rem;color:var(--color-primary)">
              <p >Pengumuman Hasil Seleksi Formulir <br/><b style="font-size: 2rem;">Feb 27</b></p>
              <p >Tahapan Interview<br/><b style="font-size: 2rem;">Mar 1-4</b></p>
              <p >Pengumuman Hasil Seleksi <br/>Panitia Starlight 2021 <br/><b style="font-size: 2rem;">Mar 8</b></p>
            </div>
          `;

          Swal.fire({
            title: "Reminder",
            html: alertContent,
            background: "#40040b",
            confirmButtonText: `Ok!`,
          });
        }, 6000);*/
	   
	   })
		
		 $(".card").click(function () {
			 
	     $(".card").removeClass("isFlipped");
			 
        if ($(this).hasClass("isFlipped")) {
          $(this).removeClass("isFlipped");
          return;
        }

        $(this).addClass("isFlipped");
      });

      const swiper2 = new Swiper(".starcitizen", {
        // Optional parameters

        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
          992: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
        // If we need pagination

        pagination: {
          el: "#starCitizen .swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: "#starCitizen .swiper-button-next",
          prevEl: "#starCitizen .swiper-button-prev",
        },
      });

      const swiper = new Swiper(".swiper-container", {
        // Optional parameters

        loop: true,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

		 $(".downArrow").click(function (e) {
    

        let target = $(`#${$(this).attr("data-target")}`);

        $("html, body").animate(
          {
            scrollTop: target.offset().top - 95,
          },
          1000
        );
      });
		
      let currentDate = new Date().getTime();
      let targetDateValue = "Feb 15, 2021";
      let targetDate = new Date(targetDateValue).getTime();
		
		$("#countdown").hide();
		
      if (targetDate > currentDate) {
         $("#countdown").show();
        $(".recruitBtn").addClass("recruitBtn-disabled");
        $(".dropdownContainer").hide();

        var x = setInterval(function () {
          let countDownDate = new Date(targetDateValue).getTime();
          var now = new Date().getTime();

          var distance = countDownDate - now;

          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          );
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          (document.getElementById("days").innerText = days),
            (document.getElementById("hours").innerText = hours),
            (document.getElementById("minutes").innerText = minutes),
            (document.getElementById("seconds").innerText = seconds);

          // document.getElementById("countdown").innerHTML =
          //   days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

          if (distance < 0) {
            clearInterval(x);
            $("#countdown").hide();
            $(".recruitBtn").removeClass("recruitBtn-disabled");
            $(".dropdownContainer").show();
          }
        }, 1000);
      }
		
		   let divisiFormLink =
        "https://form.jotform.com/starlight.aquila/form-aquila";

     /* $(".recruitBtn ").click((e) => {
        e.preventDefault();

        window.open(divisiFormLink, "_blank");
      });*/
		
		 const listNimLolos = ["42634","36271","42638", "43694", "35923", "45840", "43068", "45663", "36000", "31258", "42647", "42589", "43088", "36794", "45574", "46001", "43442", "39872", "39907", "40084", "39874", "37689", "35756", "44034", "39717", "43343", "41008", "37672", "34253", "46902", "42677", "44374", "44016", "47237", "42607", "42526", "43052", "43558", "44596", "33056", "33152", "42721", "43002", "42894", "44050", "44462", "42622", "51928", "43820", "48442", "47006", "34657", "52114", "42684", "51517", "34841", "43169", "46125", "45105", "45088", "44971", "51936", "43648", "37046", "44322", "44551", "43174", "48144", "37825", "44792", "43235", "50916", "34232", "37803", "41907", "45772", "37020"]
		
		//console.log(listNimLolos.length)

      let failModalContent = `<div>
                                    <p style="color:#f5dcaf;font-weight:600;">Maaf, kita belum bisa berkarya bersama di Starlight 2021.</p>
                                    <p style="color:#f5dcaf;font-weight:600;">TETAP SEMANGAT &<br/>SAMPAI JUMPA DI LAIN WAKTU!</p>
                                  </div>`;

      let successModalContent = `<div>
        <p style="color:#f5dcaf;font-weight:600;">Selamat,<br/> Kamu lolos ke tahap interview Starlight 2021!</p>
        <p style="color:#f5dcaf;font-weight:600;">Kamu akan mendapatkan e-mail berisikan detail dan akses untuk menuju ruangan Zoom tahap wawancaramu pada hari Minggu, 28 Februari 2021</p>
      </div>`;

      $("#submitNim").click((e) => {
        e.preventDefault();

        let nim = $("#nimInput").val().split("000000").pop();

        const isLolos = listNimLolos.includes(nim);

        Swal.fire({
          background: "#111D2A",
          html: isLolos ? successModalContent : failModalContent,
          customClass: {
            container: "interviewResultTitle",
          },
          showConfirmButton: false,
          showCloseButton: true,
        });
      });

      $("#dropdownDivisi").change((e) => {
        //console.log(e.target.value);
        let divisi = e.target.value;

        switch (divisi) {
          case "aquila":
            return (divisiFormLink =
              "https://form.jotform.com/starlight.aquila/form-aquila");

          case "auriga":
            return (divisiFormLink =
              "https://form.jotform.com/starlight.auriga/form-recruitment-auriga");

          case "corvus":
            return (divisiFormLink =
              "https://form.jotform.com/210431154518042");

          case "cygnus":
            return (divisiFormLink =
              "https://form.jotform.com/210433337173044");

          case "delphinus":
            return (divisiFormLink =
              "https://cdn.jotfor.ms/delphinus.prmarketing/DELPHINUS");

          case "draco":
            return (divisiFormLink =
              "https://form.jotform.com/dracoinsurer/form-pra-interview-calon-anggota-st");

          case "eridanus":
            return (divisiFormLink =
              "https://www.jotform.com/form/210521216172441");

          case "fornax":
            return (divisiFormLink =
              "https://form.jotform.com/starlight.fornax/form");

          case "lyra":
            return (divisiFormLink =
              "https://form.jotform.com/210425513677050");

          case "pyxis":
            return (divisiFormLink =
              "https://form.jotform.com/210424203733038");

          case "sagitta":
            return (divisiFormLink =
              "https://form.jotform.com/210421367942048");

          default:
            return (divisiFormLink =
              "https://form.jotform.com/starlight.aquila/form-aquila");
        }
      });
		
    </script>
@endsection
