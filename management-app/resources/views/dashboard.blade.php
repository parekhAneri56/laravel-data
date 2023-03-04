<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

      <!-- add blogs form here -->

      <!-- <div class="container mt-5 bg-white p-5">         
    <h3 class="text-center">Laravel blogging projetcs</h3>
    <hr class="border border-2 w-50 mx-auto">
<div class="row">
    <div class="col-md-4">
        <ul>
            <li><a href="#">Promostional digital marketing</a></li>
            <li><a href="#">Add blogs</a></li>
            <li><a href="#">Free SEO services</a></li>
            <li><a href="#">24x7 support</a></li>
            <li><a href="#">Customers services availables</a></li>
            <li><a href="#">best in the teams</a></li>
        </ul>
    </div>

    <div class="col-md-7"><img src="https://ultimez.com/blog/wp-content/uploads/2016/09/gif-animation.gif" style="margin-left: 0%; width: 80%; height: 350px;">
    </div>
</div>
</div>


        </div>
    </div> -->
    <div class="row">

<!-- Left side columns -->
<div class="col-lg-8">
  <div class="row">

    <!-- Top Selling -->
    <div class="col-12">
              <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                  <h5 style=" padding: 20px 0 15px 0; font-size: 18px; font-weight: 500; color: #012970;font-family: Poppins, sans-serif;">Top Employee <span style="color: #899bbd;font-size: 14px;font-weight: 400;">| Today</span></h5>

                  <table class="table table-borderless">
                    <thead style=" background: #f6f6fe;">
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Sallary</th>
                        <th scope="col">project No</th>
                        <th scope="col">Project price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img style=" border-radius: 5px;
  max-width: 60px;" src="{{ asset('admin/img/product-1.jpg')}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>50000</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img style=" border-radius: 5px;
  max-width: 60px;" src="{{ asset('admin/img/product-2.jpg')}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>60000</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img  style=" border-radius: 5px;
  max-width: 60px;" src="{{ asset('admin/img/product-3.jpg')}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>40000</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img style=" border-radius: 5px;
  max-width: 60px;" src="{{ asset('admin/img/product-4.jpg')}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>30000</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img style=" border-radius: 5px;
  max-width: 60px;" src="{{ asset('admin/img/product-5.jpg')}}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>35000</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
            </div>
        </div><!-- End Left side columns -->
 <!-- Right side columns -->
 <div class="col-lg-4">
 <!-- News & Updates Traffic -->
 <div class="card">

            <div class="card-body pb-0">
              <h5 style=" padding: 20px 0 15px 0; font-size: 18px; font-weight: 500; color: #012970; font-family: Poppins, sans-serif;">News &amp; Updates <span style="
  color: #899bbd; font-size: 14px; font-weight: 400;">| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img style="width: 80px; float: left; border-radius: 5px;" src="{{ asset('admin/img/news-1.jpg')}}" alt="">
                  <h4 style=" font-size: 15px; margin-left: 95px; font-weight: bold;margin-bottom: 5px;" ><a style="color: #012970; transition: 0.3s;" href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p style=" font-size: 14px; color: #777777; margin-left: 95px;"> Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>
<br>
                <div class="post-item clearfix">
                  <img style="width: 80px; float: left; border-radius: 5px;" src="{{ asset('admin/img/news-2.jpg')}}" alt="">
                  <h4 style=" font-size: 15px; margin-left: 95px; font-weight: bold;margin-bottom: 5px;" ><a style="color: #012970; transition: 0.3s;" href="#">Quidem autem et impedit</a></h4>
                  <p style=" font-size: 14px; color: #777777; margin-left: 95px;">Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>
                <br>
                <div class="post-item clearfix">
                  <img style="width: 80px; float: left; border-radius: 5px;" src="{{ asset('admin/img/news-3.jpg')}}" alt="">
                  <h4 style=" font-size: 15px; margin-left: 95px; font-weight: bold;margin-bottom: 5px;" ><a style="color: #012970; transition: 0.3s;"><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p style=" font-size: 14px; color: #777777; margin-left: 95px;">Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>
                <br>
                <div class="post-item clearfix">
                  <img style="width: 80px; float: left; border-radius: 5px;" src="{{ asset('admin/img/news-4.jpg')}}" alt="">
                  <h4 style=" font-size: 15px; margin-left: 95px; font-weight: bold;margin-bottom: 5px;" ><a style="color: #012970; transition: 0.3s;"><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p style=" font-size: 14px; color: #777777; margin-left: 95px;">Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>
                <br>
                <div class="post-item clearfix">
                  <img style="width: 80px; float: left; border-radius: 5px;" src="{{ asset('admin/img/news-5.jpg')}}" alt="">
                  <h4 style=" font-size: 15px; margin-left: 95px; font-weight: bold;margin-bottom: 5px;" ><a style="color: #012970; transition: 0.3s;"><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p style=" font-size: 14px; color: #777777; margin-left: 95px;">Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>
                <br>
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->



</x-app-layout>
