@extends('layouts.masterlayout.masterlayout')

@section('title')
    @yield('title')
@endsection

@section('body')
    @yield('body')
<script>
    /*
    //bilder als platzhalter für section
    const sections = document.getElementsByTagName("section")
    let img = document.createElement('img')


    for (const section of sections) {
        var computedStyle = getComputedStyle(section);

        elementHeight = section.clientHeight;  // height with padding
        elementWidth = section.clientWidth;   // width with padding

        elementHeight -= parseFloat(computedStyle.paddingTop) + parseFloat(computedStyle.paddingBottom);
        elementWidth -= parseFloat(computedStyle.paddingLeft) + parseFloat(computedStyle.paddingRight);

        //console.log(elementWidth, elementHeight)

        let img = document.createElement('img')
        let resolution = elementWidth + "x" + elementHeight
        img.src = "https://dummyimage.com/" + resolution + "/ccc/aaa"
        //img.classList.add('bg-img')
        img.classList.add('m-0')
        img.classList.add('p-0')
        section.appendChild(img)
    }*/
</script>
@endsection
