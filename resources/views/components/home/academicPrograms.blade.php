
<article class="py-5 text-center academicPrograms">
  <section class="container">
    <h2 class="pb-3 academicPrograms__title">Academic Programs</h2>
    <p class="academicPrograms__content">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis similique,
      <span class="d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
    </p>
    <div class="row row-cols-2 row-cols-md-4 academicPrograms__cards">
      @foreach ($cardPrograms as  $i => $value)
        <section class="col academicPrograms__cards__card">
          <div class="card my-3">
            <div class="card-body">
              <h4 class="academicPrograms__cards--title">{{$cardPrograms[$i]['title']}}</h4>
              <div class="academicPrograms__cards--box">
                {{$cardPrograms[$i]['text']}}
              </div>
            </div>
          </div>

        </section>
      @endforeach
    </div>
  </section>
</article>