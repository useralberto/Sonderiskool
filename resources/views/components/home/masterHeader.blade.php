<article class="masterHeaderHome">
  <section class="slider stick-dots">
    @foreach($slider as $i => $value)
      <div class="slide">
        <div class="slide__img">
          <img src="" alt="" data-lazy="{{$slider[$i]['img']}}" class="full-image animated img-fluid"/>
        </div>
        <div class="slide__content">
          <div class="slide__content--headings">
            <h2 class="animated" data-animation-in="slideInLeft">{{$slider[$i]['title']}}</h2>
            <p class="animated" data-animation-in="slideInLeft" data-delay-in="0.3">{{$slider[$i]['subtitle']}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </section>
</article>
