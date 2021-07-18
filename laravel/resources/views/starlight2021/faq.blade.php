@extends('starlight2021.template.base')



<!-- Custom CSS -->
@section('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('js/starlight2021/smarttab/dist/css/smart_tab.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/starlight2021/pages/faq.css')}}" />
  </head>
@endsection

  @section('content')
  <!-- CONTENT -->
  <div class="main" style="background-image: url('https://starlight.umn.ac.id/images/starlight2021/background-faq.png');">
        <div class="content container min-vh-100">
          <h3 class="header text-center mb-4">Frequently Asked Questions</h3>
          <div id="smarttab" class="st st-theme- hideOnMobile st-justified st-theme-default st-horizontal">
            <ul class="nav">
              <li>
                <a class="nav-link umum active" href="#tab-1"> Umum </a>
              </li>
              <li style="display:none;">
                <a class="nav-link panitia" href="#tab-2"> Panitia </a>
              </li>
       
            </ul>

            <div class="tab-content" style="height: 0px;">
              <div id="tab-1" class="tab-pane" role="tabpanel" style="">
                <div id="verticalTab" class="st st-theme- st-justified st-theme-default st-vertical">
                  <ul class="nav">
                    <li>
                      <a class="nav-link active" href="#vert-tab-1">
                        Apa itu Starlight?
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" href="#vert-tab-2">
                        Apa Tema Starlight 2021?
                      </a>
                    </li>
					          <li>
					            <a class="nav-link" href="#vert-tab-3">
                        Apa Konsep Starlight 2021?
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" href="#vert-tab-4">
                        Apa saja tahapan dalam Starlight 2021?
                      </a>
                    </li>
                  </ul>

                    <div class="tab-content" style="height: 0px;">
                      <div id="vert-tab-1" class="tab-pane" role="tabpanel" style="display: block;">
						  <h4><b><i>Panggung Ekspresi Bakat</i></b></h4>
						  <h4><b>Media Ekspresi Bakat</b></h4>
						  			<br>
						  <p><b>Starlight</b>  adalah salah satu kegiatan tahunan mahasiswa terbesar yang berada di bawah naungan Badan Eksekutif Mahasiswa <b>Universitas Multimedia Nusantara.</b> <b>Starlight</b> menjadi media sekaligus panggung ekspresi bakat yang dapat mendorong para peserta untuk menunjukkan dan mengembangkan kemampuan terbaik yang dimiliki. Starlight juga digunakan sebagai kegiatan untuk mempromosikan Unit Kegiatan Mahasiswa UMN di kalangan pelajar SMA, serta mahasiswa di berbagai universitas. </p>
                      
                    </div>
                    <div id="vert-tab-2" class="tab-pane" role="tabpanel" style="display: none">
                     
                      <div>
						  Starlight 2021 mengangkat tema <b><i>Infinite</i></b>. Tema ini menandakan Tahun ke-8 Starlight diadakan yang identik dengan lambang <b><i>Infinite.</i></b> Dari lambang tersebut memiliki makna bahwa para peserta dapat sebebas mungkin mengexplore bakat dan jati diri mereka, bagaikan bintang yang bersinar tiada batasnya.
                      </div>
                      </div>

                      <div id="vert-tab-3" class="tab-pane" role="tabpanel" style="display: none">
						  <h4><b><i>City of Stars</i></b></h4>
						  <br>
						            <p>StarCity adalah kota yang penuh dengan kemeriahan. Namun tiba-tiba saja, pandemi global melanda dan kota tidak lagi sama. Pandemi Covid-19 berdampak sangat parah sehingga mengganggu kesehatan mental penduduk Kota Starlight. Untuk membantu orang-orang mengatasi ketakutan ini, Starlight kembali mengadakan kegiatan tahunan untuk meringankan kota dengan hanya mengekspresikan bakat dan kreativitas. Jadi, apakah Anda siap untuk bergabung dalam keseruan dalam pencarian untuk menemukan bintang baru?</p>
                        </div>
                    <div id="vert-tab-4" class="tab-pane" role="tabpanel" style="display: none">
						<p>
						Starlight 2021 akan dibuka dengan “The Opening of Starlight 2021 : GENESIS”. Tahapan pertama adalah EMERGING. Mengusung konsep dari dalam rumah, EMERGING adalah tahapan audisi online dimana para
peserta menunjukkan bakat dan mengekspresikan diri untuk mengalahkan keterpurukan keadaan walaupun dilakukan dari rumah masing - masing.<br><br>

Tahapan kedua adalah DAZZLING, yang artinya cemerlang dan mempesona. Pada tahap ini, para peserta mulai menarik perhatian banyak penduduk di StarCity melalui pertunjukan di jalan - jalan kota, mereka akhirnya berani keluar dan berhasil menunjukkan bahwa titik sinar tersebut sebenarnya masih ada.<br><br>

Tahapan terakhir adalah RISING, momen puncak dimana para peserta menunjukkan yang terbaik dan akan bangkit menjadi bintang yang bersinar terang bagi StarCity.

						
						</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane" role="tabpanel" style="display: none;">
                <div id="verticalTab2" class="st st-theme- st-justified st-theme-default st-vertical">
                  <ul class="nav">
                    <li>
                      <a class="nav-link active" href="#vert-tab-5">
                        Bagaimana cara mendaftar sebagai Panitia Starlight 2021?
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" href="#vert-tab-6"> 
						          Bagaimana alur pendaftaran menjadi Panitia Starlight 2021?  
						        </a>
                    </li>
					          <li>
                      <a class="nav-link" href="#vert-tab-7"> 
						          Apa Kriteria dan Syarat menjadi Panitia Starlight 2021? 
						        </a>
                    </li>
                  </ul>

                  <div class="tab-content" style="height: 0px;">
                    <div id="vert-tab-5" class="tab-pane" role="tabpanel" style="display: block;">
                      <p>
						  Calon panitia diwajibkan untuk memantau <b>sosial media</b> dan <b><i>website</i> Starlight.</b> Di mana kami akan membuka form pendaftaran melalui <i>website</i> Starlight dan para pendaftar bisa mengisi form tersebut. Setelah itu pendaftar wajib mengikuti instruksi dalam rangkaian seleksi kepanitiaan Starlight 2021. 
						</p>
                    </div>
                    <div id="vert-tab-6" class="tab-pane" role="tabpanel" style="display: none">
                    
            <h4><b>Tahapan Cara Mendaftar Panitia Starlight 2021</b></h4><br>
            <ol style="padding-left: 15px;">
                <li><p>Buka website resmi Starlight 2021 di starlight.umn.ac.id atau cara lebih mudahnya kalian bisa langsung klik link di Bio Instagram resmi kami di @starlightumn.</p></li> 
                <li><p>Setelah kalian buka website Starlight 2021, akan terdapat tombol “REGISTER” yang bisa kalian klik lalu akan langsung terbuka formulir pendaftaran panitia Starlight 2021.</p></li> 
                <li><p>Isi formulir tersebut sesuai data yang diminta secara jujur ya! Setelah diisi, jangan lupa untuk submit formulir tersebut, dan pantengin terus media sosial Starlight 2021 supaya kalian tidak ketinggalan informasi mengenai tahapan selanjutnya!</p></li> 
                <li><p>Bagi kamu yang lolos seleksi formulir, tahapan selanjutnya, yaitu INTERVIEW, akan dilaksanakan pada tanggal 1 - 4 Maret 2021. Kalian bisa mendapatkan seluruh informasi, jadwal, dan link untuk virtual interview-nya melalui Instagram dan website resmi Starlight 2021.</p></li> 
                <li><p>Setelah proses interview kami akan mengumumkan siapa saja yang lolos melalui email student setiap pendaftar dan juga melalui website Starlight 2021. Jadi pantengin terus ya!</p></li> 
            </ol>
                    </div>
                    <div id="vert-tab-7" class="tab-pane" role="tabpanel" style="display: none">
            <h4> <b>Kriteria dan Syarat</b> </h4><br>
            <ol style="padding-left: 15px;">
              <li><p> Kalian wajib banget menjadi mahasiswa Universitas Multimedia Nusantara dulu ya!</p></li>
              <li><p> Terbuka untuk semua jurusan yang ada di Universitas Multimedia Nusantara.</p></li>
              <li><p> Wajib bertanggung jawab atas kepercayaan yang sudah diberikan dan mampu bekerja sama dengan baik sebagai individu maupun tim.</p></li>
              <li><p> Berdedikasi dan berkomitmen penuh untuk menjalankan seluruh rangkaian Starlight 2021 dari awal hingga akhir sesuai dengan divisi yang sudah dipilih.</p></li>
            </ol>
						        </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane" role="tabpanel" style="display: none;">
                <div id="verticalTab3" class="st st-theme- st-justified st-theme-default st-vertical">
                  <ul class="nav">
                    <li>
                      <a class="nav-link active" href="#vert-tab-8">
                        Bagaimana cara mendaftar sebagai peserta Starlight 2021?
                      </a>
                    </li>
                    <li>
                      <a class="nav-link" href="#vert-tab-9"> 
					            Apa Kriteria dan Syarat mendaftar sebagai Peserta Starlight 2021? 
					          </a>
                    </li>
					          <li>
                      <a class="nav-link" href="#vert-tab-10"> 
						        Apakah pendaftaran peserta Starlight 2021 dipungut biaya?
					          </a>
                    </li>
					          <li>
                      <a class="nav-link" href="#vert-tab-11"> 
						        Bakat dan penampilan apa saja yang boleh ditampilkan?
					          </a>
                    </li>
                  </ul>

                  <div class="tab-content" style="height: 0px;">
                    <div id="vert-tab-8" class="tab-pane" role="tabpanel" style="display: block;">
                      <h3><b>TBA</b></h3>
                      
                    </div>
                    <div id="vert-tab-9" class="tab-pane" role="tabpanel" style="display: none">
                      <h3><b>TBA</b></h3>
                      </div>
						          <div id="vert-tab-10" class="tab-pane" role="tabpanel" style="display: none">
                      <h3><b>TBA</b></h3>
                      </div>
							        <div id="vert-tab-11" class="tab-pane" role="tabpanel" style="display: none">
                      <h3><b>TBA</b></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="displayOnMobile" id="faqAccordion">
            <div id="smarttab2" class="st st-theme- st-justified st-theme-default st-horizontal">
              <ul class="nav">
                <li>
                  <a class="nav-link umum" href="#tab-12"> Umum </a>
                </li>
                <li style="display:none;">
                  <a class="nav-link panitia active" href="#tab-13"> Panitia </a>
                </li>
             
              </ul>

              <div class="tab-content" style="height: 578px;">
                <div id="tab-12" class="tab-pane" role="tabpanel" style="display: none;">
                  <div class="accordion" id="umumAccordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apa itu Starlight?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#umumAccordion" style="">
                            <div class="card-body">
                                    <h4><b><i>Panggung Ekspresi Bakat</i></b></h4>
                                    <h4><b>Media Ekspresi Bakat</b></h4><br>
                                    <p><b>Starlight</b>  adalah salah satu kegiatan tahunan mahasiswa terbesar yang berada di bawah naungan Badan Eksekutif Mahasiswa <b>Universitas Multimedia Nusantara.</b> <b>Starlight</b> menjadi media sekaligus panggung ekspresi bakat yang dapat mendorong para peserta untuk menunjukkan dan mengembangkan kemampuan terbaik yang dimiliki. Starlight juga digunakan sebagai kegiatan untuk mempromosikan Unit Kegiatan Mahasiswa UMN di kalangan pelajar SMA, serta mahasiswa di berbagai universitas. </p>
                            </div>
                      </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Apa Tema Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#umumAccordion">
                        <div class="card-body">
                        Starlight 2021 mengangkat tema <b><i>Infinite</i></b>. Tema ini menandakan Tahun ke-8 Starlight diadakan yang identik dengan lambang <b><i>Infinite.</i></b> Dari lambang tersebut memiliki makna bahwa para peserta dapat sebebas mungkin mengexplore bakat dan jati diri mereka, bagaikan bintang yang bersinar tiada batasnya.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Apa Konsep Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#umumAccordion">
                        <div class="card-body">
                        <h4><b><i>City of Stars</i></b></h4><br>
                        StarCity adalah kota yang penuh dengan kemeriahan. Namun tiba-tiba saja, pandemi global melanda dan kota tidak lagi sama. Pandemi Covid-19 berdampak sangat parah sehingga mengganggu kesehatan mental penduduk Kota Starlight. Untuk membantu orang-orang mengatasi ketakutan ini, Starlight kembali mengadakan kegiatan tahunan untuk meringankan kota dengan hanya mengekspresikan bakat dan kreativitas. Jadi, apakah Anda siap untuk bergabung dalam keseruan dalam pencarian untuk menemukan bintang baru?
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Apa saja tahapan dalam Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#umumAccordion">
                        <div class="card-body">
                        Starlight 2021 akan dibuka dengan “The Opening of Starlight 2021 : GENESIS”. Tahapan pertama adalah EMERGING. Mengusung konsep dari dalam rumah, EMERGING adalah tahapan audisi online dimana para
                        peserta menunjukkan bakat dan mengekspresikan diri untuk mengalahkan keterpurukan keadaan walaupun dilakukan dari rumah masing - masing. <br><br>
                        Tahapan kedua adalah DAZZLING, yang artinya cemerlang dan mempesona. Pada tahap ini, para peserta mulai menarik perhatian banyak penduduk di StarCity melalui pertunjukan di jalan - jalan kota, mereka akhirnya berani keluar dan berhasil menunjukkan bahwa titik sinar tersebut sebenarnya masih ada.<br><br>
                        Tahapan terakhir adalah RISING, momen puncak dimana para peserta menunjukkan yang terbaik dan akan bangkit menjadi bintang yang bersinar terang bagi StarCity.
                        </div>
                      </div>
                    </div>
                  </div>
    <div id="tab-13" class="tab-pane" role="tabpanel" style="display: block;">
                  <div class="accordion" id="panitiaAccordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn" type="button" data-toggle="collapse" data-target="#panitia1" aria-expanded="true" aria-controls="collapseOne">
                          Bagaimana cara mendaftar sebagai Panitia Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>

                      <div id="panitia1" class="collapse show" aria-labelledby="headingOne" data-parent="#panitiaAccordion">
                        <div class="card-body">
						            Calon panitia diwajibkan untuk memantau <b>sosial media</b> dan <b><i>website</i> Starlight.</b> Di mana kami akan membuka form pendaftaran melalui <i>website</i> Starlight dan para pendaftar bisa mengisi form tersebut. Setelah itu pendaftar wajib mengikuti instruksi dalam rangkaian seleksi kepanitiaan Starlight 2021. 
                      </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#panitia2" aria-expanded="false" aria-controls="collapseTwo">
                          Bagaimana alur pendaftaran menjadi Panitia Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="panitia2" class="collapse" aria-labelledby="headingTwo" data-parent="#panitiaAccordion">
                        <div class="card-body">
                        <h4><b>Tahapan Cara Mendaftar Panitia Starlight 2021</b></h4><br>
                        <ol style="padding-left: 15px;">
                            <li><p>Buka website resmi Starlight 2021 di  www.starlight.umn.ac.id atau cara lebih mudahnya kalian bisa langsung klik link di Bio Instagram resmi kami di @starlightumn.</p></li> 
                            <li><p>Setelah kalian buka website Starlight 2021, akan terdapat tombol “REGISTER” yang bisa kalian klik lalu akan langsung terbuka formulir pendaftaran panitia Starlight 2021.</p></li> 
                            <li><p>Isi formulir tersebut sesuai data yang diminta secara jujur ya! Setelah diisi, jangan lupa untuk submit formulir tersebut, dan pantengin terus media sosial Starlight 2021 supaya kalian tidak ketinggalan informasi mengenai tahapan selanjutnya!</p></li> 
                            <li><p>Bagi kamu yang lolos seleksi formulir, tahapan selanjutnya, yaitu INTERVIEW, akan dilaksanakan pada tanggal 1 - 4 Maret 2021. Kalian bisa mendapatkan seluruh informasi, jadwal, dan link untuk virtual interview-nya melalui Instagram dan website resmi Starlight 2021.</p></li> 
                            <li><p>Setelah proses interview kami akan mengumumkan siapa saja yang lolos melalui email student setiap pendaftar dan juga melalui website Starlight 2021. Jadi pantengin terus ya!</p></li> 
                        </ol>
                      </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#panitia3" aria-expanded="false" aria-controls="collapseThree">
                            Apa Kriteria dan Syarat menjadi Panitia Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="panitia3" class="collapse" aria-labelledby="headingThree" data-parent="#panitiaAccordion">
                        <div class="card-body">
                       <h4> <b>Kriteria dan Syarat</b> </h4><br>
                        <ol style="padding-left: 15px;">
                          <li><p> Kalian wajib banget menjadi mahasiswa Universitas Multimedia Nusantara dulu ya!</p></li>
                          <li><p> Terbuka untuk semua jurusan yang ada di Universitas Multimedia Nusantara.</p></li>
                          <li><p> Wajib bertanggung jawab atas kepercayaan yang sudah diberikan dan mampu bekerja sama dengan baik sebagai individu maupun tim.</p></li>
                          <li><p> Berdedikasi dan berkomitmen penuh untuk menjalankan seluruh rangkaian Starlight 2021 dari awal hingga akhir sesuai dengan divisi yang sudah dipilih.</p></li>
                        </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<div id="tab-14" class="tab-pane" role="tabpanel" style="display: none;">
                  <div class="accordion" id="pesertaAccordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn" type="button" data-toggle="collapse" data-target="#peserta1" aria-expanded="true" aria-controls="collapseOne">
                          Bagaimana cara mendaftar sebagai peserta Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>

                      <div id="peserta1" class="collapse show" aria-labelledby="headingOne" data-parent="#pesertaAccordion">
                        <div class="card-body">
                         TBA
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#peserta2" aria-expanded="false" aria-controls="collapseTwo">
                          Apa Kriteria dan Syarat mendaftar sebagai Peserta Starlight 2021?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="peserta2" class="collapse" aria-labelledby="headingTwo" data-parent="#pesertaAccordion">
                        <div class="card-body">
                        TBA
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#peserta3" aria-expanded="false" aria-controls="collapseThree">
                          Apakah pendaftaran peserta Starlight 2021 dipungut biaya?
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="peserta3" class="collapse" aria-labelledby="headingThree" data-parent="#pesertaAccordion">
                        <div class="card-body">
                         TBA
                       </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#peserta4" aria-expanded="false" aria-controls="collapseFour">
                          Bakat dan penampilan apa saja yang boleh ditampilkan?
                          <i class="fas fa-chevron-down"></i>
                          </button>
                        </h2>
                      </div>
                      <div id="peserta4" class="collapse" aria-labelledby="headingFour" data-parent="#pesertaAccordion">
                        <div class="card-body">
                        TBA
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
    
      @endsection

      @section('custom_js')
      <script src="{{asset('js/starlight2021/smarttab/dist/js/jquery.smartTab.js')}}"></script>
    <script>
     

     $(() => {
        $("#smarttab").smartTab();

        $("#smarttab2").smartTab();

        $("#verticalTab").smartTab({
          // Selected Tab, 0 = first tab
          selected: 0,

          // Theme
          theme: "default",

          // Or 'vertical'
          orientation: "vertical",

          // Justified layout for tabs
          justified: true,

          // Auto adjust content height
          autoAdjustHeight: true,

          // Supports for Back button
          backButtonSupport: true,

          // Enables URL hash
          enableURLhash: true,

          // Configs animations here
          transition: {
            // none, fade, slide-horizontal, slide-vertical, slide-swing
            animation: "none",

            // transition speed
            speed: "400",

            // easing function
            easing: "",
          },
        });
        $("#verticalTab2").smartTab({
          // Selected Tab, 0 = first tab
          selected: 0,

          // Theme
          theme: "default",

          // Or 'vertical'
          orientation: "vertical",

          // Justified layout for tabs
          justified: true,

          // Auto adjust content height
          autoAdjustHeight: true,

          // Supports for Back button
          backButtonSupport: true,

          // Enables URL hash
          enableURLhash: true,

          // Configs animations here
          transition: {
            // none, fade, slide-horizontal, slide-vertical, slide-swing
            animation: "none",

            // transition speed
            speed: "400",

            // easing function
            easing: "",
          },
        });
        $("#verticalTab3").smartTab({
          // Selected Tab, 0 = first tab
          selected: 0,

          // Theme
          theme: "default",

          // Or 'vertical'
          orientation: "vertical",

          // Justified layout for tabs
          justified: true,

          // Auto adjust content height
          autoAdjustHeight: true,

          // Supports for Back button
          backButtonSupport: true,

          // Enables URL hash
          enableURLhash: true,

          // Configs animations here
          transition: {
            // none, fade, slide-horizontal, slide-vertical, slide-swing
            animation: "none",

            // transition speed
            speed: "400",

            // easing function
            easing: "",
          },
        });
      });
    </script>
@endsection
