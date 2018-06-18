@extends('layouts.app')

@section('content')
<div class="container">

            @if(Request:: is ('home'))
               @include('inc.showcase')
               @endif
             @if(Request:: is ('home'))
                @include('inc.slideshow')
             @endif



         <h3><b>Vote News</b></h3>
      <p>የድሬዳዋ ዩኒቨርሲቲ የተማሪዎች ህብረት በ2001 ዓ.ም ፓርላሚነተሬ  የአመራረጥ ስነ-ሥርአት የተቋቋመ ሲሆን እኛ የድሬዳዋ ዩኒቨርስቲ ተማሪዎች በሀገራችን እየተሰጠ ያለው ትምህርትና ስልጠና የሀገራችንን የተማረ የሰው ሃይል ችግር ያገናዘበና ዘላቂ መፍትሄ የሚያስገኝ እንዲሆን በተናጠል ሳይሆን ተደራጅተን ከምን ጊዜውም በላይ የበኩላችንን አስተዋጽኦ የምናበርክትና የዜግነት ድርሻችንን ምንወጣበት ጊዜ አሁን እንደሆነ ስለተገነዘብን፤ 
          <a class="btn btn-primary btn-sm" href="#" role="button">View Details >></a>
       </p>
      <br><br>


       <h3><b>Vote Details</b></h3>
           <p>የመማር ማስተማር ሂደቱ ሆነ ሀገራችን በምትከተለው የትምህርት ፖሊሲና የት/ትጥራት ማረጋገጫ ነጥቦች ላይ በተማሪው የተወከለ አካል ቀጥተኛ ተሳታፊ ቢሆን ውጤታማነቱ የላቀ እንዲሆን ስለታመነ፤በኢትዮጵያ የዴሞክራሲ፤ የልማትና የሰላም ስትራተጂዎችና ፕሮግራሞች እንቅስቃሴ በመሳተፍ ለውጥ ለማምጣት፤ የአገር ተቆርቋሪነትና የአንድነት ስሜት ለማዳበር፤ የሀገራችን የረጅም ዘመን አብሮና ተቻችሎ የመኖር ባህል በበለጠ ለማጠናከር፤ለፈጣን ዕድገት አዎንታዊ ሁኔታዎችን በመፍጠር ረገድ እኛ የከፍተኛ ትምህርት ተቋማት ተማሪዎች ከፍተኛ ድርሻና የማይተካ ሚና እንዳለን ስለምናምን፤
             <a class="btn btn-primary btn-sm" href="/su_vote" role="button">View Details >></a>
           </p>
    </div>
@endsection
