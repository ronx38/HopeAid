@extends('layout.layout')

@section('title', 'Article - HopeAid')

@section('content')
    <div class="container-fluid d-flex flex-column align-items-center p-4">
        <h2 class="mt-2 fw-bold fst-italic">Article Page</h2>
    </div>
    <div class="container d-flex flex-column align-items-center gap-4">
        <div class="card d-flex flex-row" style="width: 65rem;">
        <img src={{ asset('image/megathrust.jpg') }} class="card-img-top" alt="..." style="border-radius: 20px; width: 600px; height: 250px;">
        <div class="card-body">
          <h5 class="card-title fw-bold">101 About Megathrust</h5>
          <p class="card-text">A megathrust earthquake occurs at subduction zones, where one tectonic plate is forced beneath another.
            These are the planet's most powerful earthquakes, with magnitudes exceeding 9.0. They happen along convergent boundaries,
            like the Ring of Fire, and release immense energy, causing widespread destruction. Megathrust events displace vast amounts of water,
            triggering tsunamis capable of devastating coastlines. The 2004 Indian Ocean and 2011 Tōhoku earthquakes are notable examples.
            These earthquakes result from the buildup and release of stress as the plates become locked. Scientists monitor subduction zones to mitigate risks,
            though predicting the exact timing remains challenging.
          </p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>

      <div class="card d-flex flex-row" style="width: 65rem;">
        <img src={{ asset('image/flood.jpg') }} class="card-img-top" alt="..." style="border-radius: 20px; width: 355px; height: 250px;">
        <div class="card-body">
          <h5 class="card-title fw-bold">101 About Flooding</h5>
          <p class="card-text">Flooding is the overflow of water onto normally dry land, often caused by heavy rainfall, overflowing rivers, storm surges, or dam failures.
            It can be classified into types like flash floods, coastal floods, or urban floods. Floods disrupt communities, damaging homes, infrastructure, and agriculture,
            and pose significant risks to human life and ecosystems. Low-lying and poorly drained areas are most vulnerable. Climate change, deforestation, and poor urban
            planning exacerbate flooding risks. Effective flood management includes early warning systems, floodplain zoning, sustainable drainage, and afforestation.
            Awareness and preparedness are crucial in minimizing impacts and ensuring community resilience during flood events.
          </p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>

      <div class="card d-flex flex-row" style="width: 65rem;">
        <img src={{ asset('image/donasi.webp') }} class="card-img-top" alt="..." style="border-radius: 20px; width: 355px; height: 250px;">
        <div class="card-body">
          <h5 class="card-title fw-bold">Why Should We Donate</h5>
          <p class="card-text">Donating helps create a positive impact on society by supporting those in need, whether it's providing food, education, healthcare, or
            disaster relief. It fosters a sense of compassion, community, and shared responsibility. Donations empower charitable organizations to address pressing issues,
            from poverty and climate change to emergencies. Even small contributions can bring hope and change lives, creating a ripple effect of kindness. Giving also benefits the donor,
            offering a sense of fulfillment and purpose. By donating, we invest in a better future, promote equality, and help build a more caring, supportive world for everyone. Together, we can make a difference.
          </p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
      </div>
    </div>
</body>
</html>

@endsection
