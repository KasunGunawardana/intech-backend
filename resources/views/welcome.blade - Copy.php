@extends('front.layouts.app')

@section('title')
Intech | Reinvent Your Future
@endsection

@section('meta_description')
{{ $companyDetails->description }}
@endsection

@section('keywords')
Graphic, multimedia 3D, multimedia, multimedia Video, Graphic Design, ICT, 3D Animation, AutoCAD, Photography, Video Production, Video Editing, 2D Animation, Computer Science, Web Designing, English, VFX
@endsection

@section('content')
<div class="banner-full text-white overflow-hidden" style="background-image: linear-gradient(-45deg, #0091d5 0%, #004f98 100%);">
    <canvas class="constellation" data-radius="0"></canvas>
    <div class="uk-container banner-container">
      <div class="main-slider" data-provide="slider" data-autoplay="false" data-fade="true" data-arrows="true">
        <div class="py-2">
          <div>
            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid>
              <div class="uk-flex uk-flex-center uk-flex-column overflow-hidden">
                <div class="slider-content">
                  <h5 class="intro-title">Wish to become a</h5>
                  <div class="intro">
                    <h3><span class="fw-500" data-typing="Graphic Designer?, Photography?, Web Designer?, Web Developer?, Video Editor?, 3D Animator?" data-type-speed="80"></span></h3>
                  </div>
                  {!! App\Http\Controllers\WelcomeController::renderBlock(1); !!}
                  <a href="{{ URL::to('all-courses') }}" class="common-btn btn-round">Read More &nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            <div class="slider-img">
              <div>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px"
 height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
<g id="BACKGROUND_2">
</g>
<g id="BACKGROUND_1">
<g>
  <g>
    <g>
      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="227.6606" y1="221.0298" x2="154.9753" y2="310.5476">
        <stop  offset="0" style="stop-color:#2D2E56;stop-opacity:0"/>
        <stop  offset="0.0405" style="stop-color:#3E3F64;stop-opacity:0.0405"/>
        <stop  offset="0.1738" style="stop-color:#71718C;stop-opacity:0.1738"/>
        <stop  offset="0.3097" style="stop-color:#9C9DB0;stop-opacity:0.3097"/>
        <stop  offset="0.446" style="stop-color:#C0C0CC;stop-opacity:0.446"/>
        <stop  offset="0.5827" style="stop-color:#DCDCE3;stop-opacity:0.5827"/>
        <stop  offset="0.7201" style="stop-color:#EFEFF2;stop-opacity:0.7201"/>
        <stop  offset="0.8586" style="stop-color:#FBFBFC;stop-opacity:0.8586"/>
        <stop  offset="1" style="stop-color:#FFFFFF"/>
      </linearGradient>
      <circle opacity="0.57" fill="url(#SVGID_1_)" cx="195.5" cy="260.639" r="22.8"/>
      <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="227.6606" y1="221.0298" x2="154.9753" y2="310.5476">
        <stop  offset="0" style="stop-color:#2D2E56;stop-opacity:0"/>
        <stop  offset="0.0405" style="stop-color:#3E3F64;stop-opacity:0.0405"/>
        <stop  offset="0.1738" style="stop-color:#71718C;stop-opacity:0.1738"/>
        <stop  offset="0.3097" style="stop-color:#9C9DB0;stop-opacity:0.3097"/>
        <stop  offset="0.446" style="stop-color:#C0C0CC;stop-opacity:0.446"/>
        <stop  offset="0.5827" style="stop-color:#DCDCE3;stop-opacity:0.5827"/>
        <stop  offset="0.7201" style="stop-color:#EFEFF2;stop-opacity:0.7201"/>
        <stop  offset="0.8586" style="stop-color:#FBFBFC;stop-opacity:0.8586"/>
        <stop  offset="1" style="stop-color:#FFFFFF"/>
      </linearGradient>
      <circle opacity="0.57" fill="url(#SVGID_2_)" cx="195.5" cy="260.639" r="22.8"/>
      <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="370.2959" y1="348.2441" x2="297.6107" y2="437.7617">
        <stop  offset="0" style="stop-color:#2D2E56;stop-opacity:0"/>
        <stop  offset="0.0405" style="stop-color:#3E3F64;stop-opacity:0.0405"/>
        <stop  offset="0.1738" style="stop-color:#71718C;stop-opacity:0.1738"/>
        <stop  offset="0.3097" style="stop-color:#9C9DB0;stop-opacity:0.3097"/>
        <stop  offset="0.446" style="stop-color:#C0C0CC;stop-opacity:0.446"/>
        <stop  offset="0.5827" style="stop-color:#DCDCE3;stop-opacity:0.5827"/>
        <stop  offset="0.7201" style="stop-color:#EFEFF2;stop-opacity:0.7201"/>
        <stop  offset="0.8586" style="stop-color:#FBFBFC;stop-opacity:0.8586"/>
        <stop  offset="1" style="stop-color:#FFFFFF"/>
      </linearGradient>
      <circle opacity="0.57" fill="url(#SVGID_3_)" cx="338.136" cy="387.853" r="22.8"/>
      <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="370.2959" y1="348.2441" x2="297.6107" y2="437.7617">
        <stop  offset="0" style="stop-color:#2D2E56;stop-opacity:0"/>
        <stop  offset="0.0405" style="stop-color:#3E3F64;stop-opacity:0.0405"/>
        <stop  offset="0.1738" style="stop-color:#71718C;stop-opacity:0.1738"/>
        <stop  offset="0.3097" style="stop-color:#9C9DB0;stop-opacity:0.3097"/>
        <stop  offset="0.446" style="stop-color:#C0C0CC;stop-opacity:0.446"/>
        <stop  offset="0.5827" style="stop-color:#DCDCE3;stop-opacity:0.5827"/>
        <stop  offset="0.7201" style="stop-color:#EFEFF2;stop-opacity:0.7201"/>
        <stop  offset="0.8586" style="stop-color:#FBFBFC;stop-opacity:0.8586"/>
        <stop  offset="1" style="stop-color:#FFFFFF"/>
      </linearGradient>
      <circle opacity="0.57" fill="url(#SVGID_4_)" cx="338.136" cy="387.853" r="22.8"/>
    </g>
    <g>
      <g>
        <g>
          <g opacity="0.67">
            
              <image overflow="visible" opacity="0.75" width="326" height="224" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUcAAADhCAYAAABbe3csAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADtNJREFUeNrs3Y1u3MYVgNEhtbKc
tOn7v2faytbftgaWze1ohpwhuZJ29xyAkO0kKpMCH+4lKW5KAAAAAAD7Ga70fwu4TsdrCdbQ+OfC
CSxFsPXPvmwca+EbxBHYIY7Hwt+zeySHM32vofB1mImlSAJLk2GM4rEhmJscdg5jHsP8aA2lSMJt
h/FYCeKxEMezrNtb45hPi/kxLvx+EEZgIY758XY6asHcJZBb4libFsfwtXYMC5EUSLjdOMbQvRWC
+FY4do/k2jjmYRyzON6djjH7ejcTSmEEcUyFKXH6+lr4+loIZf59hzWBXBPH2nXFMUTwEGJ4yH4/
/dlYWbWB2w7ksTAhThF8OR1TGKffT39PCv/sp0+O+bQ4xfA+fL0Pf34IcbwTR6AQx2lifC2E8Dl8
nbrzHBryGlby1et1bxxjvMYsjIcsht/C12/h9/fZJFlar0USTI1vWRSnID6djvjr4fT73OpA9sSx
tE6Xwvgrgg/Z8T2L5PT35tcgxRGEMcYxhnEK4c9w3BU20Ph9h7Wr9ZrJsRbH+yyGv47fwtcYyThB
Tt/DXWu4zSjmYczj+BymxF9B/HE6HsMWOhRCGO94D73TY2sc82CNhanxWwjgrxj+/t/jb+HXUygf
QiAPM6s1cFuhjMdrFscYxsesIWMWxtLRfce6d60uTY132Tr92ymKv46/n75OofyerdhzcRRJuM21
Or87Hdfpx9CQWhjj4z9jmBy7pse1a/VYWKm/nU56CuEfpzj+EWL5e5gu4x3s0VoNN71Wp1S/GfMc
psbv2WAVw5g/+/gaAtk9PbbEce4nYe4qK/U0Nf7jFMc/Qhzjat26Vosk3EYY8+cb4/XG0jodwxif
gXxJ7x8SH0IgF0PZe82xtlLfhzj+HuI4BXL69XTt8aFxchRHuP4wllbr18LkWApjPmFOx/3pz+5O
fz3fSHddq/NrjvnNmGmtzqfHKZDTah0nx9JteNcc4TZjmU+PMXoPlTCWHvOZfp0/KvjWs1ovxXGo
BLJ0zTG/U/17COLfwuT4vfAv6qdkQCBTqj/n+DPELoZxWrl/pL+uS/5M80/D7Do55hNdaa3Orzv+
loVy+vVDiKM71cBcHF9PARwXwviY3j8muHTJbjaSPTdkUnr/KrL8bnX86Zj4EPj3MDHGu00HYQQq
gZyuO8bHdWIwpzA+hDDmbSldtmuaHnsnx9JaPRfIeNLx5POR10oNxDAe0///9FwKE+XzQleW3t3Q
5NA4MZYiWYpj6UUTpZdOxLKbHIFSHIdCGF9CS/KX3ORx3DR4rblbnU+N8f2NMXy1V5XlL8IVRiB2
5pj14JjevxLxUOlLaWpcFcnWa45DQyRLJ3golHzu4xIAk2P8hIFjiGPenLHSlfxF2qvs9VaeUiTv
0vJHI/iRQSBVpsWUyvc6xplYtnRm1xsy+QSZ1/muUvTeEwZud51OM2Gsfbrp0of2rd5Kx44TThtL
7uNYgd5Ylia+lmOzsfNkez6GdWlCdJ0RWDNZLsVyri/NzRlXnuTcmLs07gL0bqxpIX61S3Sr+zM2
nmjtumC+Xg9p+YaLNRrYM55nuaE7rjihYaHSaWHMdQMG+PLGDf9syzXFZJ0GPmiK3LUz4xlOdGn3
b72+ANCzXn/q5Fh7aNvD3MDVhPEck2NK83eRAC7C6D8BgDgCVu8Pj6PVGbiKMJ57cnStEfiMGH74
z1YD3AxxBBBH4EZW6s0/piyOwKWGMI/gsGcgxRG45CC2To5D4/cWR+AqgtnylvDFEIojcMkxnHsN
4tJbwee+jzgCVxvL1lcomhyBmwnj0qcQnO1jEgC+UhCXAlmLZdcEefDfHPjCQcyD1vIBf5vDaHIE
LjWWeRRLk+OmTz4VR+DSw1ibFufWcHEErjaSLdcZV78dbI9PHwT4jOkxpfmbMptCaXIELjGQKfU/
AN413I07nezmN2AANIZszQPgbsgANzM1psp6nZJXlgE3EMKlPx9S3zsdP+RudcuJApwjnLV1uxbE
s9+QWfv8kGAC55osP+wDtobOE2x5jZDJErgYrZNj73vUAK46jkNqe0X5mpdOAuy9Yu/WmHHjybRG
EeDcYfyUtbo1hLu8Rw3gM8O4ZnIsvSYo/znGpbfxAnx5vTdklibIMbXfrRZK4OLjOBfJlsnRWg1c
TRyXHrJcuubouiNwE2t160rdsloDXM1aXXu5ZMtKDXBVcawFrvfBb6s1cBNrdeoIZu37AFzFWt0T
wk1v4AW41Di2rOEtb+IRTuDi47j0QPdZfvgb4NomR2s1II4A4gggjs3rNIA4NsRSMAFxBBBHAHEE
EEcAxBFAHAHEEUAcAcQRQBwBxBFAHAHEEeBTrH4BztYP2AK4ujCaHIFrjeHm4W3c4WR8FjVwdUyO
AOII3NBKvWmrHXc6mdKaDXDuEOYRHPYK5LjipIbCySxFUTCBcwWxdXIcevo0bghZrdbDTDRNlsDe
wVzqz6q72GPjCQyNJyB8wDlj2Nuj2mS52Kyx4UTWlnru5AD2juVSe7oaNK48oZ4TAzh3GMfs6+Yu
jStPZOg4OVMjsHcQlwK5uUeHlSc2Fo6WagOs3VRbhrWx8uvuQa3nhkzPSS3drRZKYGssSwNb/uvV
A9rYeVL5ibVMjtZq4NxhXBrSUm8ox4WTSB0j7Vy1BRI4RyRbrjOu2lbHzhPpvRljjQbOOT2mhSFt
dSjHlSfUs1IDnCOQS0Nby48N7vYQeMvJ1IputQa2BLEnisPMpHm2tTp1BLP2fQD2mBpTwzD2Ya8s
a/3Bbqs1sFcIl/58SH3vdFx9t3rr2NvyJh7hBLaGc+7NX8PMYLfb5Lj0QPeuH2wDsGKy/FIfsLU0
1golcJF8hgyAOAI3sGLvsrGOO58UwGeG8UtPjq41AhcdRms1gDgCiCOAOAKII4A4AogjgDgCiCOA
OAKII4A4AogjgDh28dYdQBwBxHH9BGmSBMQRQBwBxLFrpZ5bswFuJo5Den+dcWiIomACFx/H1pAN
hWlxqBwmS+DqJselabF1egS4ijiWYjdUpsaWYAoncFWT49I6bYoEbjaOLSEcs6+mRuAmJsc8hPlR
CqNJErjaOLbejBlT+91qoQSubnJMlQmyFkhrNXA1cRxmft9yzdF1R+ArWdWfsfGbrrkZY40GLjKM
rWt1KZCtKzXAZ8VwU4d6HgJfmiDnfprGag1clN61OnUEs/Z9AC4+jr0hbIkpwEet1KsHs3HHkxoq
Jzgs/EsAbAlhbTDbFMjeHx+sTZCiB3xmEFsnx6Hxe59lcrRWAx8dzJbHDruGOJ8hA1xaDHvfMzt3
ya86yIkjcE2xXApj80Y77nBiAF8hjK1vCPuUtdq1RuCjgrgUyE3vmT34bw1cQBDzoLW+QnH1i3Bc
cwQuOZaldz7U3hDWtdmKI3AtYVx6+XbqCaU4ApceyZbrjN33Q8QRuPTpMaX5mzKrQimOwCUHMqX+
B8BT4Z8VR+Cig9gTxWFm0rRWA1c/Naa0/JLtT3tlGcC5Q7j050Pqe6eju9XAVYdz7q1gQyWgbsgA
NzVZnv0DtgBumjgCiCNwIyv25reDiSNwbWE0OQKkM71DVhwBxBG4QsfTIY4Alzg5Hv1nBT5pgtyt
Q+MZTw7gI4O4a4PGnU8M4KuGs6tZ4xlPRDiBj1qha78/rh3sxo6TOHbs97vu/oAIFlp0bIzksRLM
4x6T43EmmMfCiZROtPmkABbakUfvLXx9K/To7Gv1cebk5irdMuYCrA1j7cjjuTR9/s9h5Uj7NlPt
0tf4zw6F7z34/x+YGaBqE2LteK1EsnlAO2yYEGsnUSp3XvAxi6JpEpibGGuT4ms4XsKvaxNkc2sO
HSd5rNR5OqmXygm+nmL4Glb5t1MYj6ZGoDGMtRi+ZB16yTr0uiaSLWv1seEEp+O5cIJ36a8P1c7X
aGEElgI5Ra3WnF/HU/j1c/hrq9frnskxnxhfspN4yo5vpz+/y9bntxBLcQSWJsdSd6bm/Cy0Z/pr
+QSZX7dMqfOGzNy1xrzcpSj+PB33hTAeTmEc08oP2gZubqWe4jh1J3bm1/EjHNOfPWebbLzM17Ra
t6zVpYnxJSv3dGKP/z0eTmE8hOi9nSbJfM0WRqAnjs+hOY/Z8SM7nsIEGa89zj1Y3rVW59ca84lx
OtF/nwJ4HwKYsuIfCnFMyTVIoL65Tu2J6/TjqTn/Cl//FSL5M6zYpdW6e3LMn0Ms3YQp1fthIYzP
p78e41gLJCCOpUcGX7KBbArin1kkHyvrdZwcd1mr5ybHH6foxfANWRifQjwPqX7dMSeWcFtBrG2s
peuN0+T4z9Px5+nrv8OanU+Ppcd5jr1xPIZAlSbHpxC6GLxSGH8LAb3PJsexEkJhhNuN47Exjo+n
STHGcZog42odp8YYyLk4V+9WD42TY34NMV+l43R5n/66UVObHEURhDKl8iW9aUWO9zkeQxT/md5f
d8yvOb6lnR4CT+EEhxDHMZWvG+bXBn6d4PcQx9JaLYzAXBzj5DjFMU6P+Y2ZaXJ8KkyOq2/I1Ebd
GMchvX8MJ/6L5GF8yKbGu/TXtclRGIGZtTp/vjo+QhgDmR+lu9XNK/VcHEs/81wLZMr+JWIcH7KV
+i69v1udx1Eo4XYnxnx6LD1j/ZSt1/FZ6/hw+FMljLv9bPVcIEvXBqaT/pbeX2ssPcbjQXAgNcQx
3s/IfzrvZzYt1h7+3uVnq6fpMV+va+NvjONTFsVDZWoURmApjvkN4dLPWOcvnXhZu073TI75Oxff
KnGMJ3zIohhvwrQ84whQGr7yFbt0bHpVWWsca1PkW2Glvkv/f8v9Ljus08Ca6bH00zJxzc5jWHtN
WdebwFvjVHoecTrGynFXmBTn3sYjlEBK9U8QzD9dYOmTCI5pw2dY9QQpD1mM25iFcshiWLrGKIxA
SxxTmv+ohNKHaL2lzo9i3RLHWtDy4JVW52FhUhRHIFUi1vOJp7WHvLs/p2ptlIaGlXvu14IIrJ0g
S8FMM+vzqg/w2xKooTOYe/5vA7c7SS7FclMU9wxUS/jEEThHHOfW8N3Ddq7vJ4bAOUK5axQ/KliC
CHxGKAEAAIDP8x8BBgDEOe3DjZ6ubwAAAABJRU5ErkJggg==" transform="matrix(1 0 0 1 91.1357 205.7744)">
            </image>
            <g>
              <path d="M381.793,406.336c6.523,0,11.812-5.401,11.812-12.063l-2.953-167.175c0-6.663-5.287-12.065-11.81-12.065H116.009
                c-6.522,0-11.813,5.402-11.813,12.065l-4.06,167.175c0,6.662,5.29,12.063,11.813,12.063H381.793z"/>
            </g>
          </g>
          <g>
            <g>
              <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="92.0059" y1="139.7881" x2="400.2108" y2="139.7881">
                <stop  offset="0" style="stop-color:#000000"/>
                <stop  offset="0.0233" style="stop-color:#4D4E4F"/>
                <stop  offset="0.985" style="stop-color:#000000"/>
                <stop  offset="1" style="stop-color:#616264"/>
              </linearGradient>
              <path fill="url(#SVGID_5_)" d="M111.097,205.247h276.907c0.219,0.025,0.468,0.006,0.688,0.006
                c3.272,0,5.986-2.753,6.831-6.556l0.092-0.452c0.081-0.472,0.133-0.954,0.158-1.45l11.979-109.74
                c0.214-1.388,0.343-2.68,0.343-3.999c0-4.993-2.909-8.739-6.849-8.739h-1.108H95.139h-0.476
                c-3.944,0-6.875,4.046-6.875,9.04c0,1.247,0.049,2.093,0.298,3.514l15.055,109.894c0.211,4.751,3.32,8.482,7.127,8.482
                H111.097z"/>
              <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="136.0142" y1="89.3784" x2="378.8631" y2="89.3784">
                <stop  offset="0" style="stop-color:#00244B;stop-opacity:0"/>
                <stop  offset="0.1055" style="stop-color:#004261;stop-opacity:0.2057"/>
                <stop  offset="0.3339" style="stop-color:#008E98;stop-opacity:0.6509"/>
                <stop  offset="0.513" style="stop-color:#00CEC7"/>
                <stop  offset="0.5958" style="stop-color:#00B1B2;stop-opacity:0.8299"/>
                <stop  offset="0.7763" style="stop-color:#00657B;stop-opacity:0.4594"/>
                <stop  offset="1" style="stop-color:#000031;stop-opacity:0"/>
              </linearGradient>
              <rect x="132.69" y="75.43" fill="url(#SVGID_6_)" width="252.385" height="27.897"/>
              <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="249.0962" y1="408.416" x2="249.0962" y2="215.2705">
                <stop  offset="0" style="stop-color:#000000"/>
                <stop  offset="0.985" style="stop-color:#000000"/>
                <stop  offset="1" style="stop-color:#4E4E50"/>
              </linearGradient>
              <path fill="url(#SVGID_7_)" d="M397.344,227.451c0-6.727-5.452-12.181-12.177-12.181H114.169
                c-6.726,0-12.18,5.454-12.18,12.181l-4.187,168.786c0,6.726,5.455,12.18,12.18,12.18H388.21
                c6.726,0,12.179-5.454,12.179-12.18L397.344,227.451z"/>
              <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="249.0962" y1="408.416" x2="249.0962" y2="215.2705">
                <stop  offset="0" style="stop-color:#000000"/>
                <stop  offset="0.985" style="stop-color:#000000"/>
                <stop  offset="1" style="stop-color:#4E4E50"/>
              </linearGradient>
              <path fill="url(#SVGID_8_)" d="M397.344,227.451c0-6.727-5.452-12.181-12.177-12.181H114.169
                c-6.726,0-12.18,5.454-12.18,12.181l-4.187,168.786c0,6.726,5.455,12.18,12.18,12.18H388.21
                c6.726,0,12.179-5.454,12.179-12.18L397.344,227.451z"/>
              <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="361.3389" y1="387.1631" x2="404.7456" y2="387.1631">
                <stop  offset="0" style="stop-color:#565656;stop-opacity:0"/>
                <stop  offset="0.4778" style="stop-color:#4E4E4E;stop-opacity:0.9414"/>
                <stop  offset="0.5076" style="stop-color:#4D4D4D"/>
                <stop  offset="0.6482" style="stop-color:#525252;stop-opacity:0.7145"/>
                <stop  offset="1" style="stop-color:#5C5C5C;stop-opacity:0"/>
              </linearGradient>
              <path fill="url(#SVGID_9_)" d="M360.968,408.416h27.242c6.726,0,12.179-5.454,12.179-12.18l-0.548-30.326h-38.873V408.416z"
                />
              <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="249.0957" y1="113.2271" x2="249.0957" y2="266.2151">
                <stop  offset="0" style="stop-color:#A7A9AC"/>
                <stop  offset="0" style="stop-color:#D1D3D4"/>
                <stop  offset="0.393" style="stop-color:#8B9298"/>
                <stop  offset="0.4295" style="stop-color:#92989E"/>
                <stop  offset="0.6832" style="stop-color:#BCBFC2"/>
                <stop  offset="0.8819" style="stop-color:#D6D7D8"/>
                <stop  offset="1" style="stop-color:#E0E0E0"/>
              </linearGradient>
              <path fill="url(#SVGID_10_)" d="M397.344,222.258c0-6.726-5.452-12.18-12.177-12.18H114.169
                c-6.726,0-12.18,5.454-12.18,12.18l-4.187,168.787c0,6.726,5.455,12.18,12.18,12.18H226.07c0-1.684,1.361-3.046,3.045-3.046
                h39.583c1.681,0,3.044,1.362,3.044,3.046H388.21c6.726,0,12.179-5.454,12.179-12.18L397.344,222.258z"/>
              <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="249.0962" y1="400.8438" x2="249.0962" y2="211.6958">
                <stop  offset="0" style="stop-color:#A7A9AC"/>
                <stop  offset="0" style="stop-color:#D1D3D4"/>
                <stop  offset="0.393" style="stop-color:#8B9298"/>
                <stop  offset="0.6598" style="stop-color:#A8BCBF"/>
                <stop  offset="0.8699" style="stop-color:#B9D6D7"/>
                <stop  offset="0.9948" style="stop-color:#C0E0E0"/>
              </linearGradient>
              <path fill="url(#SVGID_11_)" d="M396.257,223.624c0-6.587-5.412-11.928-12.087-11.928H115.158
                c-6.676,0-12.09,5.341-12.09,11.928l-4.156,165.291c0,6.589,5.414,11.93,12.09,11.93h115.236
                c0-1.647,1.351-2.982,3.022-2.982h39.294c1.669,0,3.022,1.335,3.022,2.982h115.614c6.675,0,12.089-5.341,12.089-11.93
                L396.257,223.624z"/>
              <linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="249.8579" y1="219.5938" x2="249.8579" y2="208.5566">
                <stop  offset="0" style="stop-color:#808183"/>
                <stop  offset="0.7805" style="stop-color:#4E4E50"/>
              </linearGradient>
              <path fill="url(#SVGID_12_)" d="M144.999,208.557h209.718l-1.618,8.025c-0.353,1.752-1.892,3.012-3.68,3.012H150.296
                c-1.787,0-3.326-1.26-3.679-3.012L144.999,208.557z"/>
              <linearGradient id="SVGID_13_" gradientUnits="userSpaceOnUse" x1="249.8584" y1="227.644" x2="249.8584" y2="213.0608">
                <stop  offset="0" style="stop-color:#4E4E50"/>
                <stop  offset="0.015" style="stop-color:#000000"/>
                <stop  offset="1" style="stop-color:#000000"/>
              </linearGradient>
              <path fill="url(#SVGID_13_)" d="M189.368,207.183h120.981l-0.934,4.63c-0.203,1.01-1.092,1.737-2.123,1.737H192.423
                c-1.031,0-1.919-0.727-2.123-1.737L189.368,207.183z"/>
              <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="247.9414" y1="209.7104" x2="247.9414" y2="78.7671">
                <stop  offset="0" style="stop-color:#000000"/>
                <stop  offset="0.985" style="stop-color:#000000"/>
                <stop  offset="1" style="stop-color:#616264"/>
              </linearGradient>
              <path fill="url(#SVGID_14_)" d="M111.097,209.698h276.907c0.219,0.024,0.468,0.005,0.688,0.005
                c3.272,0,5.986-2.753,6.831-6.556l0.092-0.452c0.081-0.472,0.133-0.954,0.158-1.45l11.979-109.74
                c0.214-1.388,0.343-2.681,0.343-3.999c0-4.992-2.909-8.739-6.849-8.739h-1.108H95.139h-0.476
                c-3.944,0-6.875,4.047-6.875,9.039c0,1.248,0.049,2.094,0.298,3.515l15.055,109.894c0.211,4.752,3.32,8.482,7.127,8.482
                H111.097z"/>
              <linearGradient id="SVGID_15_" gradientUnits="userSpaceOnUse" x1="154.4199" y1="233.9629" x2="344.9161" y2="43.4667">
                <stop  offset="0" style="stop-color:#000000"/>
                <stop  offset="0.9795" style="stop-color:#4E4E50"/>
              </linearGradient>
              <polygon fill="url(#SVGID_15_)" points="103.513,92.088 393.538,92.088 382.884,198.279 118.737,198.279 								"/>
              <linearGradient id="SVGID_16_" gradientUnits="userSpaceOnUse" x1="248.5249" y1="197.9741" x2="248.5249" y2="92.3926">
                <stop  offset="0" style="stop-color:#45FFFF"/>
                <stop  offset="0.0052" style="stop-color:#3CF8F8"/>
                <stop  offset="0.0137" style="stop-color:#23E6E3"/>
                <stop  offset="0.0233" style="stop-color:#00CCC6"/>
                <stop  offset="0.1682" style="stop-color:#00C2C3"/>
                <stop  offset="0.4188" style="stop-color:#00A5BB"/>
                <stop  offset="0.743" style="stop-color:#0078AE"/>
                <stop  offset="0.9526" style="stop-color:#0057A4"/>
                <stop  offset="0.9617" style="stop-color:#004B94"/>
                <stop  offset="0.9794" style="stop-color:#002B69"/>
                <stop  offset="1" style="stop-color:#000031"/>
              </linearGradient>
              <polygon fill="url(#SVGID_16_)" points="104.345,92.393 392.704,92.393 382.108,197.974 119.482,197.974 								"/>
              <linearGradient id="SVGID_17_" gradientUnits="userSpaceOnUse" x1="247.9419" y1="378.5898" x2="247.9419" y2="336.3115">
                <stop  offset="0.9781" style="stop-color:#DBDCDD"/>
                <stop  offset="1" style="stop-color:#808183"/>
              </linearGradient>
              <path opacity="0.81" fill="url(#SVGID_17_)" d="M283.823,378.59h-71.765c-2.15,0-3.894-1.741-3.894-3.893v-34.491
                c0-2.151,1.744-3.895,3.894-3.895h71.765c2.151,0,3.896,1.743,3.896,3.895v34.491
                C287.719,376.849,285.975,378.59,283.823,378.59z"/>
              <linearGradient id="SVGID_18_" gradientUnits="userSpaceOnUse" x1="247.9419" y1="378.5898" x2="247.9419" y2="336.3115">
                <stop  offset="0.9781" style="stop-color:#DBDCDD"/>
                <stop  offset="1" style="stop-color:#808183"/>
              </linearGradient>
              <path opacity="0.81" fill="url(#SVGID_18_)" d="M283.823,378.59h-71.765c-2.15,0-3.894-1.741-3.894-3.893v-34.491
                c0-2.151,1.744-3.895,3.894-3.895h71.765c2.151,0,3.896,1.743,3.896,3.895v34.491
                C287.719,376.849,285.975,378.59,283.823,378.59z"/>
              <linearGradient id="SVGID_19_" gradientUnits="userSpaceOnUse" x1="247.9419" y1="378.5898" x2="247.9419" y2="363.7061">
                <stop  offset="0.9781" style="stop-color:#DBDCDD"/>
                <stop  offset="1" style="stop-color:#808183"/>
              </linearGradient>
              <path opacity="0.81" fill="url(#SVGID_19_)" d="M208.164,363.706v10.991c0,2.151,1.744,3.893,3.894,3.893h71.765
                c2.151,0,3.896-1.741,3.896-3.893v-10.991H208.164z"/>
              <linearGradient id="SVGID_20_" gradientUnits="userSpaceOnUse" x1="368.9609" y1="229.312" x2="368.9609" y2="220.2256">
                <stop  offset="0" style="stop-color:#434244"/>
                <stop  offset="1" style="stop-color:#575757"/>
              </linearGradient>
              <circle fill="url(#SVGID_20_)" cx="368.961" cy="224.769" r="4.543"/>
              <linearGradient id="SVGID_21_" gradientUnits="userSpaceOnUse" x1="368.9609" y1="227.9678" x2="368.9609" y2="221.5703">
                <stop  offset="0" style="stop-color:#59595B"/>
                <stop  offset="1" style="stop-color:#0D0D0D"/>
              </linearGradient>
              <circle fill="url(#SVGID_21_)" cx="368.961" cy="224.769" r="3.198"/>
              <g>
                <linearGradient id="SVGID_22_" gradientUnits="userSpaceOnUse" x1="354.8545" y1="394.3408" x2="354.8545" y2="391.9551">
                  <stop  offset="0" style="stop-color:#434244"/>
                  <stop  offset="1" style="stop-color:#575757"/>
                </linearGradient>
                <circle fill="url(#SVGID_22_)" cx="354.854" cy="393.147" r="1.191"/>
                <linearGradient id="SVGID_23_" gradientUnits="userSpaceOnUse" x1="363.0273" y1="394.3408" x2="363.0273" y2="391.9551">
                  <stop  offset="0" style="stop-color:#434244"/>
                  <stop  offset="1" style="stop-color:#575757"/>
                </linearGradient>
                <circle fill="url(#SVGID_23_)" cx="363.027" cy="393.147" r="1.192"/>
                <linearGradient id="SVGID_24_" gradientUnits="userSpaceOnUse" x1="371.1992" y1="394.3408" x2="371.1992" y2="391.9551">
                  <stop  offset="0" style="stop-color:#434244"/>
                  <stop  offset="1" style="stop-color:#575757"/>
                </linearGradient>
                <circle fill="url(#SVGID_24_)" cx="371.2" cy="393.147" r="1.192"/>
              </g>
              <linearGradient id="SVGID_25_" gradientUnits="userSpaceOnUse" x1="249.6304" y1="335.1992" x2="249.6304" y2="232.8359">
                <stop  offset="0.9456" style="stop-color:#DBDCDD;stop-opacity:0"/>
                <stop  offset="0.9781" style="stop-color:#DBDCDD"/>
                <stop  offset="1" style="stop-color:#808183"/>
              </linearGradient>
              <path opacity="0.81" fill="url(#SVGID_25_)" d="M374.802,335.199H124.458c-3.073,0-5.563-2.491-5.563-5.564v-91.236
                c0-3.073,2.491-5.563,5.563-5.563h250.344c3.072,0,5.564,2.491,5.564,5.563v91.236
                C380.366,332.708,377.874,335.199,374.802,335.199z"/>
              <g>
                <g>
                  <linearGradient id="SVGID_26_" gradientUnits="userSpaceOnUse" x1="240.6714" y1="328.168" x2="240.6714" y2="311.7754">
                    <stop  offset="0" style="stop-color:#434244"/>
                    <stop  offset="1" style="stop-color:#575757"/>
                  </linearGradient>
                  <path fill="url(#SVGID_26_)" d="M283.263,326.119c0,1.134-0.983,2.049-2.191,2.049h-80.798
                    c-1.212,0-2.193-0.915-2.193-2.049v-12.292c0-1.134,0.981-2.052,2.193-2.052h80.798c1.208,0,2.191,0.918,2.191,2.052
                    V326.119z"/>
                  <linearGradient id="SVGID_27_" gradientUnits="userSpaceOnUse" x1="240.6699" y1="327.542" x2="240.6699" y2="312.4004">
                    <stop  offset="0" style="stop-color:#59595B"/>
                    <stop  offset="1" style="stop-color:#0D0D0D"/>
                  </linearGradient>
                  <path fill="url(#SVGID_27_)" d="M282.714,326.178c0,0.756-0.651,1.364-1.462,1.364h-81.161
                    c-0.808,0-1.466-0.608-1.466-1.364v-12.41c0-0.75,0.658-1.367,1.466-1.367h81.161c0.811,0,1.462,0.617,1.462,1.367
                    V326.178z"/>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_28_" gradientUnits="userSpaceOnUse" x1="360.3877" y1="294.3311" x2="360.3877" y2="280.2109">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_28_)" d="M346.085,292.623c0,0.943,0.818,1.708,1.825,1.708h24.951
                      c1.011,0,1.829-0.765,1.829-1.708v-10.699c0-0.943-0.818-1.713-1.829-1.713H347.91c-1.007,0-1.825,0.77-1.825,1.713
                      V292.623z"/>
                    
                      <linearGradient id="SVGID_29_" gradientUnits="userSpaceOnUse" x1="360.3867" y1="293.7617" x2="360.3867" y2="280.7842">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_29_)" d="M373.899,292.397c0,0.752-0.651,1.364-1.465,1.364h-24.096
                      c-0.809,0-1.464-0.612-1.464-1.364v-10.249c0-0.751,0.655-1.364,1.464-1.364h24.096c0.813,0,1.465,0.613,1.465,1.364
                      V292.397z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_30_" gradientUnits="userSpaceOnUse" x1="186.2612" y1="328.1611" x2="186.2612" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_30_)" d="M176.243,313.819c0-1.133,0.984-2.05,2.194-2.05h15.652c1.214,0,2.19,0.917,2.19,2.05
                      v12.296c0,1.132-0.977,2.046-2.19,2.046h-15.652c-1.21,0-2.194-0.914-2.194-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_31_" gradientUnits="userSpaceOnUse" x1="186.2627" y1="327.4375" x2="186.2627" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_31_)" d="M195.597,326.415c0,0.563-0.49,1.022-1.096,1.022h-16.477
                      c-0.604,0-1.096-0.46-1.096-1.022v-12.895c0-0.567,0.491-1.023,1.096-1.023h16.477c0.606,0,1.096,0.456,1.096,1.023
                      V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_32_" gradientUnits="userSpaceOnUse" x1="166.6929" y1="328.1611" x2="166.6929" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_32_)" d="M158.88,313.819c0-1.133,0.978-2.05,2.191-2.05h11.244c1.209,0,2.191,0.917,2.191,2.05
                      v12.296c0,1.132-0.982,2.046-2.191,2.046h-11.244c-1.214,0-2.191-0.914-2.191-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_33_" gradientUnits="userSpaceOnUse" x1="166.6929" y1="327.4375" x2="166.6929" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_33_)" d="M173.823,326.415c0,0.563-0.491,1.022-1.099,1.022h-12.062c-0.608,0-1.1-0.46-1.1-1.022
                      v-12.895c0-0.567,0.492-1.023,1.1-1.023h12.062c0.607,0,1.099,0.456,1.099,1.023V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_34_" gradientUnits="userSpaceOnUse" x1="294.8438" y1="328.1611" x2="294.8438" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_34_)" d="M284.824,313.819c0-1.133,0.983-2.05,2.192-2.05h15.651c1.213,0,2.194,0.917,2.194,2.05
                      v12.296c0,1.132-0.981,2.046-2.194,2.046h-15.651c-1.209,0-2.192-0.914-2.192-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_35_" gradientUnits="userSpaceOnUse" x1="294.8438" y1="327.4375" x2="294.8438" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_35_)" d="M304.179,326.415c0,0.563-0.493,1.022-1.099,1.022h-16.471c-0.608,0-1.1-0.46-1.1-1.022
                      v-12.895c0-0.567,0.491-1.023,1.1-1.023h16.471c0.605,0,1.099,0.456,1.099,1.023V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_36_" gradientUnits="userSpaceOnUse" x1="314.5742" y1="328.1611" x2="314.5742" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_36_)" d="M306.759,313.819c0-1.133,0.98-2.05,2.196-2.05h11.239c1.212,0,2.194,0.917,2.194,2.05
                      v12.296c0,1.132-0.982,2.046-2.194,2.046h-11.239c-1.216,0-2.196-0.914-2.196-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_37_" gradientUnits="userSpaceOnUse" x1="314.5723" y1="327.4375" x2="314.5723" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_37_)" d="M321.702,326.415c0,0.563-0.49,1.022-1.096,1.022h-12.065
                      c-0.607,0-1.098-0.46-1.098-1.022v-12.895c0-0.567,0.49-1.023,1.098-1.023h12.065c0.605,0,1.096,0.456,1.096,1.023
                      V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_38_" gradientUnits="userSpaceOnUse" x1="149.3271" y1="328.1611" x2="149.3271" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_38_)" d="M141.511,313.819c0-1.133,0.984-2.05,2.196-2.05h11.243c1.21,0,2.194,0.917,2.194,2.05
                      v12.296c0,1.132-0.983,2.046-2.194,2.046h-11.243c-1.212,0-2.196-0.914-2.196-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_39_" gradientUnits="userSpaceOnUse" x1="149.3267" y1="327.4375" x2="149.3267" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_39_)" d="M156.456,326.415c0,0.563-0.493,1.022-1.094,1.022h-12.069
                      c-0.605,0-1.095-0.46-1.095-1.022v-12.895c0-0.567,0.49-1.023,1.095-1.023h12.069c0.601,0,1.094,0.456,1.094,1.023
                      V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_40_" gradientUnits="userSpaceOnUse" x1="131.7778" y1="328.1611" x2="131.7778" y2="311.7695">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_40_)" d="M123.964,313.819c0-1.133,0.98-2.05,2.191-2.05h11.243c1.212,0,2.193,0.917,2.193,2.05
                      v12.296c0,1.132-0.981,2.046-2.193,2.046h-11.243c-1.211,0-2.191-0.914-2.191-2.046V313.819z"/>
                    
                      <linearGradient id="SVGID_41_" gradientUnits="userSpaceOnUse" x1="131.7769" y1="327.4375" x2="131.7769" y2="312.4971">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_41_)" d="M138.906,326.415c0,0.563-0.489,1.022-1.096,1.022h-12.065
                      c-0.604,0-1.096-0.46-1.096-1.022v-12.895c0-0.567,0.492-1.023,1.096-1.023h12.065c0.607,0,1.096,0.456,1.096,1.023
                      V326.415z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_42_" gradientUnits="userSpaceOnUse" x1="142.7974" y1="310.1533" x2="142.7974" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_42_)" d="M124.169,308.449c0,0.941,0.818,1.704,1.827,1.704h33.605
                      c1.011,0,1.826-0.763,1.826-1.704v-10.703c0-0.943-0.815-1.707-1.826-1.707h-33.605c-1.009,0-1.827,0.764-1.827,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_43_" gradientUnits="userSpaceOnUse" x1="142.7993" y1="309.585" x2="142.7993" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_43_)" d="M160.637,308.218c0,0.756-0.654,1.367-1.463,1.367h-32.75
                      c-0.809,0-1.463-0.611-1.463-1.367v-10.245c0-0.753,0.654-1.363,1.463-1.363h32.75c0.81,0,1.463,0.61,1.463,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_44_" gradientUnits="userSpaceOnUse" x1="355.7568" y1="310.1533" x2="355.7568" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_44_)" d="M337.128,308.449c0,0.941,0.818,1.704,1.825,1.704h33.604
                      c1.011,0,1.828-0.763,1.828-1.704v-10.703c0-0.943-0.817-1.707-1.828-1.707h-33.604c-1.007,0-1.825,0.764-1.825,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_45_" gradientUnits="userSpaceOnUse" x1="355.7559" y1="309.585" x2="355.7559" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_45_)" d="M373.593,308.218c0,0.756-0.654,1.367-1.461,1.367h-32.75
                      c-0.81,0-1.464-0.611-1.464-1.367v-10.245c0-0.753,0.654-1.363,1.464-1.363h32.75c0.807,0,1.461,0.61,1.461,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_46_" gradientUnits="userSpaceOnUse" x1="171.0391" y1="310.1533" x2="171.0391" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_46_)" d="M163.438,308.449c0,0.941,0.82,1.704,1.829,1.704h11.55c1.008,0,1.824-0.763,1.824-1.704
                      v-10.703c0-0.944-0.816-1.707-1.824-1.707h-11.55c-1.009,0-1.829,0.763-1.829,1.707V308.449z"/>
                    <linearGradient id="SVGID_47_" gradientUnits="userSpaceOnUse" x1="171.0415" y1="309.585" x2="171.0415" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_47_)" d="M177.85,308.218c0,0.756-0.654,1.367-1.462,1.367h-10.693
                      c-0.806,0-1.462-0.611-1.462-1.367v-10.245c0-0.756,0.657-1.363,1.462-1.363h10.693c0.808,0,1.462,0.607,1.462,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_48_" gradientUnits="userSpaceOnUse" x1="188.4673" y1="310.1533" x2="188.4673" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_48_)" d="M180.865,308.449c0,0.941,0.818,1.704,1.829,1.704h11.545
                      c1.01,0,1.831-0.763,1.831-1.704v-10.703c0-0.944-0.821-1.707-1.831-1.707h-11.545c-1.011,0-1.829,0.763-1.829,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_49_" gradientUnits="userSpaceOnUse" x1="188.4663" y1="309.585" x2="188.4663" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_49_)" d="M195.275,308.218c0,0.756-0.654,1.367-1.462,1.367h-10.695
                      c-0.803,0-1.461-0.611-1.461-1.367v-10.245c0-0.756,0.659-1.363,1.461-1.363h10.695c0.808,0,1.462,0.607,1.462,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <linearGradient id="SVGID_50_" gradientUnits="userSpaceOnUse" x1="205.895" y1="310.1533" x2="205.895" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_50_)" d="M198.294,308.449c0,0.941,0.818,1.704,1.826,1.704h11.549
                      c1.007,0,1.826-0.763,1.826-1.704v-10.703c0-0.944-0.819-1.707-1.826-1.707H200.12c-1.008,0-1.826,0.763-1.826,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_51_" gradientUnits="userSpaceOnUse" x1="205.8945" y1="309.585" x2="205.8945" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_51_)" d="M212.703,308.218c0,0.756-0.657,1.367-1.462,1.367h-10.694
                      c-0.808,0-1.46-0.611-1.46-1.367v-10.245c0-0.756,0.652-1.363,1.46-1.363h10.694c0.805,0,1.462,0.607,1.462,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_52_" gradientUnits="userSpaceOnUse" x1="223.3223" y1="310.1533" x2="223.3223" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_52_)" d="M215.721,308.449c0,0.941,0.816,1.704,1.826,1.704h11.547
                      c1.008,0,1.829-0.763,1.829-1.704v-10.703c0-0.944-0.821-1.707-1.829-1.707h-11.547c-1.01,0-1.826,0.763-1.826,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_53_" gradientUnits="userSpaceOnUse" x1="223.3188" y1="309.585" x2="223.3188" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_53_)" d="M230.128,308.218c0,0.756-0.653,1.367-1.462,1.367h-10.693
                      c-0.805,0-1.462-0.611-1.462-1.367v-10.245c0-0.756,0.657-1.363,1.462-1.363h10.693c0.809,0,1.462,0.607,1.462,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_54_" gradientUnits="userSpaceOnUse" x1="240.7466" y1="310.1533" x2="240.7466" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_54_)" d="M233.146,308.449c0,0.941,0.818,1.704,1.831,1.704h11.542
                      c1.013,0,1.828-0.763,1.828-1.704v-10.703c0-0.944-0.815-1.707-1.828-1.707h-11.542c-1.013,0-1.831,0.763-1.831,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_55_" gradientUnits="userSpaceOnUse" x1="240.7456" y1="309.585" x2="240.7456" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_55_)" d="M247.556,308.218c0,0.756-0.652,1.367-1.461,1.367h-10.694
                      c-0.809,0-1.465-0.611-1.465-1.367v-10.245c0-0.756,0.656-1.363,1.465-1.363h10.694c0.809,0,1.461,0.607,1.461,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_56_" gradientUnits="userSpaceOnUse" x1="258.0518" y1="310.1533" x2="258.0518" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_56_)" d="M250.452,308.449c0,0.941,0.817,1.704,1.824,1.704h11.548
                      c1.01,0,1.827-0.763,1.827-1.704v-10.703c0-0.944-0.817-1.707-1.827-1.707h-11.548c-1.007,0-1.824,0.763-1.824,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_57_" gradientUnits="userSpaceOnUse" x1="258.0527" y1="309.585" x2="258.0527" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_57_)" d="M264.863,308.218c0,0.756-0.656,1.367-1.468,1.367h-10.688
                      c-0.81,0-1.464-0.611-1.464-1.367v-10.245c0-0.756,0.654-1.363,1.464-1.363h10.688c0.812,0,1.468,0.607,1.468,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_58_" gradientUnits="userSpaceOnUse" x1="275.4785" y1="310.1533" x2="275.4785" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_58_)" d="M267.878,308.449c0,0.941,0.818,1.704,1.829,1.704h11.543
                      c1.012,0,1.828-0.763,1.828-1.704v-10.703c0-0.944-0.816-1.707-1.828-1.707h-11.543c-1.011,0-1.829,0.763-1.829,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_59_" gradientUnits="userSpaceOnUse" x1="275.4785" y1="309.585" x2="275.4785" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_59_)" d="M282.286,308.218c0,0.756-0.651,1.367-1.461,1.367h-10.693
                      c-0.81,0-1.46-0.611-1.46-1.367v-10.245c0-0.756,0.65-1.363,1.46-1.363h10.693c0.81,0,1.461,0.607,1.461,1.363V308.218z"
                      />
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_60_" gradientUnits="userSpaceOnUse" x1="327.7578" y1="310.1533" x2="327.7578" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_60_)" d="M320.156,308.449c0,0.941,0.82,1.704,1.828,1.704h11.545
                      c1.012,0,1.831-0.763,1.831-1.704v-10.703c0-0.944-0.819-1.707-1.831-1.707h-11.545c-1.008,0-1.828,0.763-1.828,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_61_" gradientUnits="userSpaceOnUse" x1="327.7588" y1="309.585" x2="327.7588" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_61_)" d="M334.568,308.218c0,0.756-0.657,1.367-1.463,1.367h-10.697
                      c-0.806,0-1.459-0.611-1.459-1.367v-10.245c0-0.756,0.653-1.363,1.459-1.363h10.697c0.806,0,1.463,0.607,1.463,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_62_" gradientUnits="userSpaceOnUse" x1="310.3311" y1="310.1533" x2="310.3311" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_62_)" d="M302.73,308.449c0,0.941,0.817,1.704,1.828,1.704h11.547c1.01,0,1.826-0.763,1.826-1.704
                      v-10.703c0-0.944-0.816-1.707-1.826-1.707h-11.547c-1.011,0-1.828,0.763-1.828,1.707V308.449z"/>
                    <linearGradient id="SVGID_63_" gradientUnits="userSpaceOnUse" x1="310.3301" y1="309.585" x2="310.3301" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_63_)" d="M317.142,308.218c0,0.756-0.656,1.367-1.461,1.367h-10.696
                      c-0.806,0-1.465-0.611-1.465-1.367v-10.245c0-0.756,0.659-1.363,1.465-1.363h10.696c0.805,0,1.461,0.607,1.461,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_64_" gradientUnits="userSpaceOnUse" x1="292.9063" y1="310.1533" x2="292.9063" y2="296.0391">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_64_)" d="M285.305,308.449c0,0.941,0.819,1.704,1.826,1.704h11.547
                      c1.011,0,1.829-0.763,1.829-1.704v-10.703c0-0.944-0.818-1.707-1.829-1.707h-11.547c-1.007,0-1.826,0.763-1.826,1.707
                      V308.449z"/>
                    <linearGradient id="SVGID_65_" gradientUnits="userSpaceOnUse" x1="292.9053" y1="309.585" x2="292.9053" y2="296.6094">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_65_)" d="M299.715,308.218c0,0.756-0.658,1.367-1.467,1.367h-10.692
                      c-0.806,0-1.46-0.611-1.46-1.367v-10.245c0-0.756,0.654-1.363,1.46-1.363h10.692c0.809,0,1.467,0.607,1.467,1.363
                      V308.218z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_66_" gradientUnits="userSpaceOnUse" x1="162.0815" y1="294.2734" x2="162.0815" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_66_)" d="M154.481,292.566c0,0.945,0.822,1.707,1.831,1.707h11.545
                      c1.011,0,1.825-0.762,1.825-1.707v-10.703c0-0.94-0.814-1.706-1.825-1.706h-11.545c-1.009,0-1.831,0.766-1.831,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_67_" gradientUnits="userSpaceOnUse" x1="162.0845" y1="293.7051" x2="162.0845" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_67_)" d="M168.895,292.338c0,0.755-0.657,1.367-1.463,1.367h-10.692
                      c-0.809,0-1.466-0.612-1.466-1.367v-10.243c0-0.756,0.657-1.368,1.466-1.368h10.692c0.807,0,1.463,0.612,1.463,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_68_" gradientUnits="userSpaceOnUse" x1="179.5103" y1="294.2734" x2="179.5103" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_68_)" d="M171.911,292.566c0,0.945,0.816,1.707,1.828,1.707h11.546
                      c1.008,0,1.824-0.762,1.824-1.707v-10.703c0-0.94-0.816-1.706-1.824-1.706h-11.546c-1.012,0-1.828,0.766-1.828,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_69_" gradientUnits="userSpaceOnUse" x1="179.5112" y1="293.7051" x2="179.5112" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_69_)" d="M186.321,292.338c0,0.755-0.655,1.367-1.464,1.367h-10.692
                      c-0.807,0-1.463-0.612-1.463-1.367v-10.243c0-0.756,0.657-1.368,1.463-1.368h10.692c0.809,0,1.464,0.612,1.464,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <linearGradient id="SVGID_70_" gradientUnits="userSpaceOnUse" x1="196.938" y1="294.2734" x2="196.938" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_70_)" d="M189.339,292.566c0,0.945,0.816,1.707,1.823,1.707h11.547
                      c1.008,0,1.828-0.762,1.828-1.707v-10.703c0-0.94-0.82-1.706-1.828-1.706h-11.547c-1.006,0-1.823,0.766-1.823,1.706
                      V292.566z"/>
                    <linearGradient id="SVGID_71_" gradientUnits="userSpaceOnUse" x1="196.937" y1="293.7051" x2="196.937" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_71_)" d="M203.746,292.338c0,0.755-0.656,1.367-1.463,1.367h-10.69
                      c-0.809,0-1.464-0.612-1.464-1.367v-10.243c0-0.756,0.655-1.368,1.464-1.368h10.69c0.807,0,1.463,0.612,1.463,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_72_" gradientUnits="userSpaceOnUse" x1="214.3643" y1="294.2734" x2="214.3643" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_72_)" d="M206.763,292.566c0,0.945,0.817,1.707,1.829,1.707h11.547
                      c1.008,0,1.828-0.762,1.828-1.707v-10.703c0-0.94-0.82-1.706-1.828-1.706h-11.547c-1.011,0-1.829,0.766-1.829,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_73_" gradientUnits="userSpaceOnUse" x1="214.3623" y1="293.7051" x2="214.3623" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_73_)" d="M221.172,292.338c0,0.755-0.653,1.367-1.462,1.367h-10.694
                      c-0.809,0-1.463-0.612-1.463-1.367v-10.243c0-0.756,0.654-1.368,1.463-1.368h10.694c0.809,0,1.462,0.612,1.462,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_74_" gradientUnits="userSpaceOnUse" x1="231.7905" y1="294.2734" x2="231.7905" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_74_)" d="M224.188,292.566c0,0.945,0.818,1.707,1.828,1.707h11.547
                      c1.011,0,1.831-0.762,1.831-1.707v-10.703c0-0.94-0.82-1.706-1.831-1.706h-11.547c-1.01,0-1.828,0.766-1.828,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_75_" gradientUnits="userSpaceOnUse" x1="231.7891" y1="293.7051" x2="231.7891" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_75_)" d="M238.597,292.338c0,0.755-0.651,1.367-1.459,1.367h-10.696
                      c-0.806,0-1.46-0.612-1.46-1.367v-10.243c0-0.756,0.654-1.368,1.46-1.368h10.696c0.809,0,1.459,0.612,1.459,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_76_" gradientUnits="userSpaceOnUse" x1="249.0942" y1="294.2734" x2="249.0942" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_76_)" d="M241.493,292.566c0,0.945,0.818,1.707,1.829,1.707h11.546
                      c1.009,0,1.827-0.762,1.827-1.707v-10.703c0-0.94-0.818-1.706-1.827-1.706h-11.546c-1.011,0-1.829,0.766-1.829,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_77_" gradientUnits="userSpaceOnUse" x1="249.0933" y1="293.7051" x2="249.0933" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_77_)" d="M255.902,292.338c0,0.755-0.653,1.367-1.464,1.367h-10.692
                      c-0.805,0-1.462-0.612-1.462-1.367v-10.243c0-0.756,0.657-1.368,1.462-1.368h10.692c0.811,0,1.464,0.612,1.464,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_78_" gradientUnits="userSpaceOnUse" x1="266.5215" y1="294.2734" x2="266.5215" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_78_)" d="M258.921,292.566c0,0.945,0.819,1.707,1.83,1.707h11.541c1.012,0,1.83-0.762,1.83-1.707
                      v-10.703c0-0.94-0.818-1.706-1.83-1.706h-11.541c-1.011,0-1.83,0.766-1.83,1.706V292.566z"/>
                    
                      <linearGradient id="SVGID_79_" gradientUnits="userSpaceOnUse" x1="266.5195" y1="293.7051" x2="266.5195" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_79_)" d="M273.328,292.338c0,0.755-0.651,1.367-1.46,1.367h-10.692
                      c-0.809,0-1.464-0.612-1.464-1.367v-10.243c0-0.756,0.655-1.368,1.464-1.368h10.692c0.809,0,1.46,0.612,1.46,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_80_" gradientUnits="userSpaceOnUse" x1="283.9463" y1="294.2734" x2="283.9463" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_80_)" d="M276.345,292.566c0,0.945,0.819,1.707,1.831,1.707h11.546
                      c1.008,0,1.826-0.762,1.826-1.707v-10.703c0-0.94-0.818-1.706-1.826-1.706h-11.546c-1.012,0-1.831,0.766-1.831,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_81_" gradientUnits="userSpaceOnUse" x1="283.9482" y1="293.7051" x2="283.9482" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_81_)" d="M290.755,292.338c0,0.755-0.651,1.367-1.458,1.367H278.6
                      c-0.807,0-1.458-0.612-1.458-1.367v-10.243c0-0.756,0.651-1.368,1.458-1.368h10.697c0.807,0,1.458,0.612,1.458,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <linearGradient id="SVGID_82_" gradientUnits="userSpaceOnUse" x1="301.376" y1="294.2734" x2="301.376" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_82_)" d="M293.774,292.566c0,0.945,0.816,1.707,1.826,1.707h11.549
                      c1.007,0,1.828-0.762,1.828-1.707v-10.703c0-0.94-0.821-1.706-1.828-1.706h-11.549c-1.01,0-1.826,0.766-1.826,1.706
                      V292.566z"/>
                    <linearGradient id="SVGID_83_" gradientUnits="userSpaceOnUse" x1="301.375" y1="293.7051" x2="301.375" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_83_)" d="M308.183,292.338c0,0.755-0.657,1.367-1.461,1.367h-10.697
                      c-0.805,0-1.458-0.612-1.458-1.367v-10.243c0-0.756,0.653-1.368,1.458-1.368h10.697c0.804,0,1.461,0.612,1.461,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_84_" gradientUnits="userSpaceOnUse" x1="318.8008" y1="294.2734" x2="318.8008" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_84_)" d="M311.199,292.566c0,0.945,0.817,1.707,1.827,1.707h11.548
                      c1.009,0,1.828-0.762,1.828-1.707v-10.703c0-0.94-0.819-1.706-1.828-1.706h-11.548c-1.01,0-1.827,0.766-1.827,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_85_" gradientUnits="userSpaceOnUse" x1="318.8018" y1="293.7051" x2="318.8018" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_85_)" d="M325.609,292.338c0,0.755-0.655,1.367-1.459,1.367h-10.696
                      c-0.808,0-1.46-0.612-1.46-1.367v-10.243c0-0.756,0.652-1.368,1.46-1.368h10.696c0.804,0,1.459,0.612,1.459,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_86_" gradientUnits="userSpaceOnUse" x1="336.2285" y1="294.2734" x2="336.2285" y2="280.1572">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_86_)" d="M328.627,292.566c0,0.945,0.818,1.707,1.828,1.707h11.547
                      c1.008,0,1.829-0.762,1.829-1.707v-10.703c0-0.94-0.821-1.706-1.829-1.706h-11.547c-1.01,0-1.828,0.766-1.828,1.706
                      V292.566z"/>
                    
                      <linearGradient id="SVGID_87_" gradientUnits="userSpaceOnUse" x1="336.2285" y1="293.7051" x2="336.2285" y2="280.7266">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_87_)" d="M343.039,292.338c0,0.755-0.656,1.367-1.467,1.367h-10.693
                      c-0.804,0-1.462-0.612-1.462-1.367v-10.243c0-0.756,0.658-1.368,1.462-1.368h10.693c0.811,0,1.467,0.612,1.467,1.368
                      V292.338z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_88_" gradientUnits="userSpaceOnUse" x1="157.8794" y1="278.5635" x2="157.8794" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_88_)" d="M150.28,276.854c0,0.948,0.817,1.71,1.826,1.71h11.546c1.01,0,1.827-0.762,1.827-1.71
                      v-10.698c0-0.941-0.816-1.71-1.827-1.71h-11.546c-1.008,0-1.826,0.769-1.826,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_89_" gradientUnits="userSpaceOnUse" x1="157.8784" y1="277.9961" x2="157.8784" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_89_)" d="M164.686,276.629c0,0.756-0.652,1.367-1.459,1.367h-10.696
                      c-0.805,0-1.46-0.611-1.46-1.367v-10.246c0-0.756,0.655-1.366,1.46-1.366h10.696c0.807,0,1.459,0.61,1.459,1.366V276.629
                      z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_90_" gradientUnits="userSpaceOnUse" x1="175.3086" y1="278.5635" x2="175.3086" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_90_)" d="M167.709,276.854c0,0.948,0.814,1.71,1.821,1.71h11.55c1.006,0,1.828-0.762,1.828-1.71
                      v-10.698c0-0.941-0.822-1.71-1.828-1.71h-11.55c-1.006,0-1.821,0.769-1.821,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_91_" gradientUnits="userSpaceOnUse" x1="175.3042" y1="277.9961" x2="175.3042" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_91_)" d="M182.114,276.629c0,0.756-0.654,1.367-1.462,1.367h-10.692
                      c-0.809,0-1.464-0.611-1.464-1.367v-10.246c0-0.756,0.655-1.366,1.464-1.366h10.692c0.808,0,1.462,0.61,1.462,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_92_" gradientUnits="userSpaceOnUse" x1="192.7329" y1="278.5635" x2="192.7329" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_92_)" d="M185.13,276.854c0,0.948,0.818,1.71,1.829,1.71h11.545c1.009,0,1.831-0.762,1.831-1.71
                      v-10.698c0-0.941-0.822-1.71-1.831-1.71h-11.545c-1.011,0-1.829,0.769-1.829,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_93_" gradientUnits="userSpaceOnUse" x1="192.7319" y1="277.9961" x2="192.7319" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_93_)" d="M199.541,276.629c0,0.756-0.652,1.367-1.461,1.367h-10.696
                      c-0.807,0-1.46-0.611-1.46-1.367v-10.246c0-0.756,0.653-1.366,1.46-1.366h10.696c0.809,0,1.461,0.61,1.461,1.366V276.629
                      z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_94_" gradientUnits="userSpaceOnUse" x1="210.1597" y1="278.5635" x2="210.1597" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_94_)" d="M202.558,276.854c0,0.948,0.82,1.71,1.83,1.71h11.542c1.011,0,1.833-0.762,1.833-1.71
                      v-10.698c0-0.941-0.822-1.71-1.833-1.71h-11.542c-1.01,0-1.83,0.769-1.83,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_95_" gradientUnits="userSpaceOnUse" x1="210.1592" y1="277.9961" x2="210.1592" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_95_)" d="M216.967,276.629c0,0.756-0.653,1.367-1.461,1.367h-10.69
                      c-0.81,0-1.465-0.611-1.465-1.367v-10.246c0-0.756,0.655-1.366,1.465-1.366h10.69c0.808,0,1.461,0.61,1.461,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_96_" gradientUnits="userSpaceOnUse" x1="227.5854" y1="278.5635" x2="227.5854" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_96_)" d="M219.984,276.854c0,0.948,0.818,1.71,1.827,1.71h11.546c1.012,0,1.828-0.762,1.828-1.71
                      v-10.698c0-0.941-0.816-1.71-1.828-1.71h-11.546c-1.009,0-1.827,0.769-1.827,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_97_" gradientUnits="userSpaceOnUse" x1="227.5864" y1="277.9961" x2="227.5864" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_97_)" d="M234.396,276.629c0,0.756-0.654,1.367-1.463,1.367H222.24
                      c-0.809,0-1.462-0.611-1.462-1.367v-10.246c0-0.756,0.653-1.366,1.462-1.366h10.692c0.81,0,1.463,0.61,1.463,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_98_" gradientUnits="userSpaceOnUse" x1="244.8901" y1="278.5635" x2="244.8901" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_98_)" d="M237.288,276.854c0,0.948,0.82,1.71,1.831,1.71h11.542c1.012,0,1.831-0.762,1.831-1.71
                      v-10.698c0-0.941-0.819-1.71-1.831-1.71h-11.542c-1.011,0-1.831,0.769-1.831,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_99_" gradientUnits="userSpaceOnUse" x1="244.8901" y1="277.9961" x2="244.8901" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_99_)" d="M251.697,276.629c0,0.756-0.654,1.367-1.46,1.367h-10.694
                      c-0.809,0-1.461-0.611-1.461-1.367v-10.246c0-0.756,0.652-1.366,1.461-1.366h10.694c0.806,0,1.46,0.61,1.46,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_100_" gradientUnits="userSpaceOnUse" x1="262.3164" y1="278.5635" x2="262.3164" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_100_)" d="M254.714,276.854c0,0.948,0.82,1.71,1.829,1.71h11.55c1.006,0,1.825-0.762,1.825-1.71
                      v-10.698c0-0.941-0.819-1.71-1.825-1.71h-11.55c-1.009,0-1.829,0.769-1.829,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_101_" gradientUnits="userSpaceOnUse" x1="262.3184" y1="277.9961" x2="262.3184" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_101_)" d="M269.128,276.629c0,0.756-0.658,1.367-1.463,1.367H256.97
                      c-0.806,0-1.461-0.611-1.461-1.367v-10.246c0-0.756,0.655-1.366,1.461-1.366h10.695c0.805,0,1.463,0.61,1.463,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_102_" gradientUnits="userSpaceOnUse" x1="279.7441" y1="278.5635" x2="279.7441" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_102_)" d="M272.142,276.854c0,0.948,0.818,1.71,1.828,1.71h11.547c1.008,0,1.829-0.762,1.829-1.71
                      v-10.698c0-0.941-0.821-1.71-1.829-1.71H273.97c-1.01,0-1.828,0.769-1.828,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_103_" gradientUnits="userSpaceOnUse" x1="279.7422" y1="277.9961" x2="279.7422" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_103_)" d="M286.552,276.629c0,0.756-0.654,1.367-1.459,1.367h-10.695
                      c-0.808,0-1.466-0.611-1.466-1.367v-10.246c0-0.756,0.658-1.366,1.466-1.366h10.695c0.805,0,1.459,0.61,1.459,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_104_" gradientUnits="userSpaceOnUse" x1="297.1699" y1="278.5635" x2="297.1699" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_104_)" d="M289.571,276.854c0,0.948,0.816,1.71,1.823,1.71h11.547c1.012,0,1.828-0.762,1.828-1.71
                      v-10.698c0-0.941-0.816-1.71-1.828-1.71h-11.547c-1.007,0-1.823,0.769-1.823,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_105_" gradientUnits="userSpaceOnUse" x1="297.1699" y1="277.9961" x2="297.1699" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_105_)" d="M303.979,276.629c0,0.756-0.655,1.367-1.463,1.367h-10.692
                      c-0.807,0-1.462-0.611-1.462-1.367v-10.246c0-0.756,0.655-1.366,1.462-1.366h10.692c0.808,0,1.463,0.61,1.463,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_106_" gradientUnits="userSpaceOnUse" x1="314.5967" y1="278.5635" x2="314.5967" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_106_)" d="M306.994,276.854c0,0.948,0.822,1.71,1.829,1.71h11.546c1.01,0,1.83-0.762,1.83-1.71
                      v-10.698c0-0.941-0.82-1.71-1.83-1.71h-11.546c-1.007,0-1.829,0.769-1.829,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_107_" gradientUnits="userSpaceOnUse" x1="314.5977" y1="277.9961" x2="314.5977" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_107_)" d="M321.406,276.629c0,0.756-0.657,1.367-1.466,1.367h-10.689
                      c-0.808,0-1.462-0.611-1.462-1.367v-10.246c0-0.756,0.654-1.366,1.462-1.366h10.689c0.809,0,1.466,0.61,1.466,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_108_" gradientUnits="userSpaceOnUse" x1="332.0225" y1="278.5635" x2="332.0225" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_108_)" d="M324.422,276.854c0,0.948,0.818,1.71,1.83,1.71h11.541c1.015,0,1.83-0.762,1.83-1.71
                      v-10.698c0-0.941-0.815-1.71-1.83-1.71h-11.541c-1.012,0-1.83,0.769-1.83,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_109_" gradientUnits="userSpaceOnUse" x1="332.0234" y1="277.9961" x2="332.0234" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_109_)" d="M338.833,276.629c0,0.756-0.654,1.367-1.463,1.367h-10.694
                      c-0.809,0-1.463-0.611-1.463-1.367v-10.246c0-0.756,0.654-1.366,1.463-1.366h10.694c0.809,0,1.463,0.61,1.463,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_110_" gradientUnits="userSpaceOnUse" x1="349.4492" y1="278.5635" x2="349.4492" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_110_)" d="M341.847,276.854c0,0.948,0.821,1.71,1.833,1.71h11.542c1.01,0,1.83-0.762,1.83-1.71
                      v-10.698c0-0.941-0.82-1.71-1.83-1.71H343.68c-1.012,0-1.833,0.769-1.833,1.71V276.854z"/>
                    
                      <linearGradient id="SVGID_111_" gradientUnits="userSpaceOnUse" x1="349.4512" y1="277.9961" x2="349.4512" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_111_)" d="M356.261,276.629c0,0.756-0.656,1.367-1.463,1.367h-10.692
                      c-0.809,0-1.465-0.611-1.465-1.367v-10.246c0-0.756,0.656-1.366,1.465-1.366h10.692c0.807,0,1.463,0.61,1.463,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <linearGradient id="SVGID_112_" gradientUnits="userSpaceOnUse" x1="366.875" y1="278.5635" x2="366.875" y2="264.4453">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_112_)" d="M359.274,276.854c0,0.948,0.818,1.71,1.83,1.71h11.547c1.007,0,1.824-0.762,1.824-1.71
                      v-10.698c0-0.941-0.817-1.71-1.824-1.71h-11.547c-1.012,0-1.83,0.769-1.83,1.71V276.854z"/>
                    <linearGradient id="SVGID_113_" gradientUnits="userSpaceOnUse" x1="366.876" y1="277.9961" x2="366.876" y2="265.0166">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_113_)" d="M373.685,276.629c0,0.756-0.654,1.367-1.462,1.367h-10.693
                      c-0.805,0-1.462-0.611-1.462-1.367v-10.246c0-0.756,0.657-1.366,1.462-1.366h10.693c0.808,0,1.462,0.61,1.462,1.366
                      V276.629z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_114_" gradientUnits="userSpaceOnUse" x1="136.1157" y1="278.5049" x2="136.1157" y2="264.3906">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_114_)" d="M124.169,276.799c0,0.943,0.818,1.706,1.827,1.706h20.24
                      c1.008,0,1.827-0.763,1.827-1.706v-10.7c0-0.944-0.819-1.708-1.827-1.708h-20.24c-1.009,0-1.827,0.764-1.827,1.708
                      V276.799z"/>
                    <linearGradient id="SVGID_115_" gradientUnits="userSpaceOnUse" x1="136.1182" y1="277.9375" x2="136.1182" y2="264.96">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_115_)" d="M147.275,276.573c0,0.752-0.658,1.364-1.467,1.364h-19.383
                      c-0.809,0-1.463-0.612-1.463-1.364v-10.246c0-0.757,0.654-1.367,1.463-1.367h19.383c0.81,0,1.467,0.61,1.467,1.367
                      V276.573z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_116_" gradientUnits="userSpaceOnUse" x1="340.7949" y1="262.624" x2="340.7949" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_116_)" d="M333.194,260.918c0,0.943,0.821,1.706,1.834,1.706h11.541
                      c1.011,0,1.827-0.763,1.827-1.706v-10.701c0-0.941-0.816-1.705-1.827-1.705h-11.541c-1.013,0-1.834,0.764-1.834,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_117_" gradientUnits="userSpaceOnUse" x1="340.7988" y1="262.0557" x2="340.7988" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_117_)" d="M347.607,260.693c0,0.751-0.653,1.362-1.464,1.362h-10.691
                      c-0.807,0-1.463-0.611-1.463-1.362v-10.245c0-0.757,0.656-1.367,1.463-1.367h10.691c0.811,0,1.464,0.61,1.464,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_118_" gradientUnits="userSpaceOnUse" x1="184.0806" y1="262.624" x2="184.0806" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_118_)" d="M176.48,260.918c0,0.943,0.815,1.706,1.827,1.706h11.544
                      c1.009,0,1.829-0.763,1.829-1.706v-10.701c0-0.941-0.819-1.705-1.829-1.705h-11.544c-1.012,0-1.827,0.764-1.827,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_119_" gradientUnits="userSpaceOnUse" x1="184.0776" y1="262.0557" x2="184.0776" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_119_)" d="M190.885,260.693c0,0.751-0.649,1.362-1.458,1.362h-10.69
                      c-0.813,0-1.465-0.611-1.465-1.362v-10.245c0-0.757,0.652-1.367,1.465-1.367h10.69c0.809,0,1.458,0.61,1.458,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_120_" gradientUnits="userSpaceOnUse" x1="131.7993" y1="262.624" x2="131.7993" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_120_)" d="M124.2,260.918c0,0.943,0.819,1.706,1.829,1.706h11.545
                      c1.011,0,1.824-0.763,1.824-1.706v-10.701c0-0.941-0.813-1.705-1.824-1.705h-11.545c-1.01,0-1.829,0.764-1.829,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_121_" gradientUnits="userSpaceOnUse" x1="131.8013" y1="262.0557" x2="131.8013" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_121_)" d="M138.608,260.693c0,0.751-0.651,1.362-1.463,1.362h-10.692
                      c-0.806,0-1.458-0.611-1.458-1.362v-10.245c0-0.757,0.653-1.367,1.458-1.367h10.692c0.812,0,1.463,0.61,1.463,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_122_" gradientUnits="userSpaceOnUse" x1="149.2271" y1="262.624" x2="149.2271" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_122_)" d="M141.627,260.918c0,0.943,0.816,1.706,1.825,1.706H155c1.011,0,1.827-0.763,1.827-1.706
                      v-10.701c0-0.941-0.816-1.705-1.827-1.705h-11.547c-1.009,0-1.825,0.764-1.825,1.705V260.918z"/>
                    
                      <linearGradient id="SVGID_123_" gradientUnits="userSpaceOnUse" x1="149.2271" y1="262.0557" x2="149.2271" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_123_)" d="M156.037,260.693c0,0.751-0.654,1.362-1.464,1.362H143.88
                      c-0.809,0-1.463-0.611-1.463-1.362v-10.245c0-0.757,0.654-1.367,1.463-1.367h10.693c0.81,0,1.464,0.61,1.464,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_124_" gradientUnits="userSpaceOnUse" x1="166.6538" y1="262.624" x2="166.6538" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_124_)" d="M159.052,260.918c0,0.943,0.818,1.706,1.828,1.706h11.547
                      c1.008,0,1.829-0.763,1.829-1.706v-10.701c0-0.941-0.821-1.705-1.829-1.705H160.88c-1.01,0-1.828,0.764-1.828,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_125_" gradientUnits="userSpaceOnUse" x1="166.6519" y1="262.0557" x2="166.6519" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_125_)" d="M173.462,260.693c0,0.751-0.651,1.362-1.463,1.362h-10.69
                      c-0.812,0-1.467-0.611-1.467-1.362v-10.245c0-0.757,0.656-1.367,1.467-1.367h10.69c0.812,0,1.463,0.61,1.463,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_126_" gradientUnits="userSpaceOnUse" x1="201.4673" y1="262.624" x2="201.4673" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_126_)" d="M193.865,260.918c0,0.943,0.82,1.706,1.83,1.706h11.546
                      c1.011,0,1.828-0.763,1.828-1.706v-10.701c0-0.941-0.817-1.705-1.828-1.705h-11.546c-1.01,0-1.83,0.764-1.83,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_127_" gradientUnits="userSpaceOnUse" x1="201.4702" y1="262.0557" x2="201.4702" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_127_)" d="M208.279,260.693c0,0.751-0.657,1.362-1.464,1.362h-10.692
                      c-0.806,0-1.462-0.611-1.462-1.362v-10.245c0-0.757,0.656-1.367,1.462-1.367h10.692c0.807,0,1.464,0.61,1.464,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_128_" gradientUnits="userSpaceOnUse" x1="218.8115" y1="262.624" x2="218.8115" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_128_)" d="M211.211,260.918c0,0.943,0.818,1.706,1.828,1.706h11.545
                      c1.009,0,1.828-0.763,1.828-1.706v-10.701c0-0.941-0.819-1.705-1.828-1.705h-11.545c-1.01,0-1.828,0.764-1.828,1.705
                      V260.918z"/>
                    <linearGradient id="SVGID_129_" gradientUnits="userSpaceOnUse" x1="218.811" y1="262.0557" x2="218.811" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_129_)" d="M225.622,260.693c0,0.751-0.655,1.362-1.464,1.362h-10.692
                      c-0.808,0-1.464-0.611-1.464-1.362v-10.245c0-0.757,0.657-1.367,1.464-1.367h10.692c0.809,0,1.464,0.61,1.464,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_130_" gradientUnits="userSpaceOnUse" x1="236.2373" y1="262.624" x2="236.2373" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_130_)" d="M228.635,260.918c0,0.943,0.818,1.706,1.83,1.706h11.549
                      c1.01,0,1.826-0.763,1.826-1.706v-10.701c0-0.941-0.816-1.705-1.826-1.705h-11.549c-1.011,0-1.83,0.764-1.83,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_131_" gradientUnits="userSpaceOnUse" x1="236.2397" y1="262.0557" x2="236.2397" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_131_)" d="M243.05,260.693c0,0.751-0.656,1.362-1.465,1.362h-10.693
                      c-0.808,0-1.463-0.611-1.463-1.362v-10.245c0-0.757,0.655-1.367,1.463-1.367h10.693c0.809,0,1.465,0.61,1.465,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_132_" gradientUnits="userSpaceOnUse" x1="253.6641" y1="262.624" x2="253.6641" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_132_)" d="M246.064,260.918c0,0.943,0.816,1.706,1.827,1.706h11.546
                      c1.009,0,1.826-0.763,1.826-1.706v-10.701c0-0.941-0.817-1.705-1.826-1.705h-11.546c-1.011,0-1.827,0.764-1.827,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_133_" gradientUnits="userSpaceOnUse" x1="253.6641" y1="262.0557" x2="253.6641" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_133_)" d="M260.473,260.693c0,0.751-0.653,1.362-1.462,1.362h-10.692
                      c-0.806,0-1.463-0.611-1.463-1.362v-10.245c0-0.757,0.657-1.367,1.463-1.367h10.692c0.809,0,1.462,0.61,1.462,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_134_" gradientUnits="userSpaceOnUse" x1="288.5205" y1="262.624" x2="288.5205" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_134_)" d="M280.92,260.918c0,0.943,0.813,1.706,1.822,1.706h11.55
                      c1.008,0,1.829-0.763,1.829-1.706v-10.701c0-0.941-0.821-1.705-1.829-1.705h-11.55c-1.009,0-1.822,0.764-1.822,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_135_" gradientUnits="userSpaceOnUse" x1="288.5176" y1="262.0557" x2="288.5176" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_135_)" d="M295.326,260.693c0,0.751-0.657,1.362-1.464,1.362H283.17
                      c-0.806,0-1.46-0.611-1.46-1.362v-10.245c0-0.757,0.654-1.367,1.46-1.367h10.692c0.807,0,1.464,0.61,1.464,1.367V260.693
                      z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_136_" gradientUnits="userSpaceOnUse" x1="305.9453" y1="262.624" x2="305.9453" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_136_)" d="M298.344,260.918c0,0.943,0.819,1.706,1.828,1.706h11.544
                      c1.013,0,1.83-0.763,1.83-1.706v-10.701c0-0.941-0.817-1.705-1.83-1.705h-11.544c-1.009,0-1.828,0.764-1.828,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_137_" gradientUnits="userSpaceOnUse" x1="305.9453" y1="262.0557" x2="305.9453" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_137_)" d="M312.755,260.693c0,0.751-0.658,1.362-1.463,1.362h-10.693
                      c-0.808,0-1.464-0.611-1.464-1.362v-10.245c0-0.757,0.656-1.367,1.464-1.367h10.693c0.805,0,1.463,0.61,1.463,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_138_" gradientUnits="userSpaceOnUse" x1="362.4141" y1="262.624" x2="362.4141" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_138_)" d="M350.105,260.918c0,0.943,0.817,1.706,1.828,1.706h20.96c1.009,0,1.83-0.763,1.83-1.706
                      v-10.701c0-0.941-0.821-1.705-1.83-1.705h-20.96c-1.011,0-1.828,0.764-1.828,1.705V260.918z"/>
                    
                      <linearGradient id="SVGID_139_" gradientUnits="userSpaceOnUse" x1="362.4121" y1="262.0557" x2="362.4121" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_139_)" d="M373.929,260.693c0,0.751-0.654,1.362-1.46,1.362h-20.107
                      c-0.808,0-1.466-0.611-1.466-1.362v-10.245c0-0.757,0.658-1.367,1.466-1.367h20.107c0.806,0,1.46,0.61,1.46,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_140_" gradientUnits="userSpaceOnUse" x1="240.2446" y1="246.915" x2="240.2446" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_140_)" d="M248.411,245.207c0,0.944-0.823,1.708-1.83,1.708h-12.674
                      c-1.01,0-1.829-0.765-1.829-1.708v-6.028c0-0.948,0.818-1.711,1.829-1.711h12.674c1.007,0,1.83,0.763,1.83,1.711V245.207
                      z"/>
                    
                      <linearGradient id="SVGID_141_" gradientUnits="userSpaceOnUse" x1="240.2437" y1="246.2339" x2="240.2437" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_141_)" d="M232.869,239.516c0-0.755,0.656-1.366,1.464-1.366h11.822
                      c0.806,0,1.463,0.61,1.463,1.366v5.351c0,0.754-0.657,1.367-1.463,1.367h-11.822c-0.808,0-1.464-0.613-1.464-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_142_" gradientUnits="userSpaceOnUse" x1="222.4517" y1="246.915" x2="222.4517" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_142_)" d="M230.617,245.207c0,0.944-0.82,1.708-1.828,1.708h-12.675
                      c-1.008,0-1.829-0.765-1.829-1.708v-6.028c0-0.948,0.821-1.711,1.829-1.711h12.675c1.008,0,1.828,0.763,1.828,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_143_" gradientUnits="userSpaceOnUse" x1="222.4517" y1="246.2339" x2="222.4517" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_143_)" d="M215.079,239.516c0-0.755,0.658-1.366,1.465-1.366h11.817
                      c0.81,0,1.463,0.61,1.463,1.366v5.351c0,0.754-0.653,1.367-1.463,1.367h-11.817c-0.807,0-1.465-0.613-1.465-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_144_" gradientUnits="userSpaceOnUse" x1="132.1509" y1="246.915" x2="132.1509" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_144_)" d="M140.316,245.207c0,0.944-0.819,1.708-1.83,1.708h-12.672
                      c-1.012,0-1.829-0.765-1.829-1.708v-6.028c0-0.948,0.817-1.711,1.829-1.711h12.672c1.011,0,1.83,0.763,1.83,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_145_" gradientUnits="userSpaceOnUse" x1="132.1519" y1="246.2339" x2="132.1519" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_145_)" d="M124.779,239.516c0-0.755,0.657-1.366,1.459-1.366h11.823
                      c0.806,0,1.463,0.61,1.463,1.366v5.351c0,0.754-0.658,1.367-1.463,1.367h-11.823c-0.803,0-1.459-0.613-1.459-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_146_" gradientUnits="userSpaceOnUse" x1="150.0649" y1="246.915" x2="150.0649" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_146_)" d="M158.229,245.207c0,0.944-0.814,1.708-1.829,1.708h-12.673
                      c-1.008,0-1.825-0.765-1.825-1.708v-6.028c0-0.948,0.817-1.711,1.825-1.711h12.673c1.015,0,1.829,0.763,1.829,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_147_" gradientUnits="userSpaceOnUse" x1="150.0645" y1="246.2339" x2="150.0645" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_147_)" d="M142.691,239.516c0-0.755,0.654-1.366,1.463-1.366h11.82
                      c0.809,0,1.463,0.61,1.463,1.366v5.351c0,0.754-0.654,1.367-1.463,1.367h-11.82c-0.809,0-1.463-0.613-1.463-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_148_" gradientUnits="userSpaceOnUse" x1="168.2222" y1="246.915" x2="168.2222" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_148_)" d="M176.388,245.207c0,0.944-0.818,1.708-1.83,1.708h-12.672
                      c-1.009,0-1.829-0.765-1.829-1.708v-6.028c0-0.948,0.82-1.711,1.829-1.711h12.672c1.012,0,1.83,0.763,1.83,1.711V245.207
                      z"/>
                    
                      <linearGradient id="SVGID_149_" gradientUnits="userSpaceOnUse" x1="168.2231" y1="246.2339" x2="168.2231" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_149_)" d="M160.85,239.516c0-0.755,0.656-1.366,1.461-1.366h11.827
                      c0.804,0,1.459,0.61,1.459,1.366v5.351c0,0.754-0.656,1.367-1.459,1.367h-11.827c-0.806,0-1.461-0.613-1.461-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_150_" gradientUnits="userSpaceOnUse" x1="186.3804" y1="246.915" x2="186.3804" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_150_)" d="M194.543,245.207c0,0.944-0.815,1.708-1.827,1.708h-12.673
                      c-1.009,0-1.826-0.765-1.826-1.708v-6.028c0-0.948,0.816-1.711,1.826-1.711h12.673c1.012,0,1.827,0.763,1.827,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_151_" gradientUnits="userSpaceOnUse" x1="186.3804" y1="246.2339" x2="186.3804" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_151_)" d="M179.008,239.516c0-0.755,0.655-1.366,1.462-1.366h11.825
                      c0.803,0,1.458,0.61,1.458,1.366v5.351c0,0.754-0.655,1.367-1.458,1.367H180.47c-0.807,0-1.462-0.613-1.462-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_152_" gradientUnits="userSpaceOnUse" x1="204.2949" y1="246.915" x2="204.2949" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_152_)" d="M212.46,245.207c0,0.944-0.82,1.708-1.829,1.708h-12.673
                      c-1.007,0-1.828-0.765-1.828-1.708v-6.028c0-0.948,0.821-1.711,1.828-1.711h12.673c1.009,0,1.829,0.763,1.829,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_153_" gradientUnits="userSpaceOnUse" x1="204.2954" y1="246.2339" x2="204.2954" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_153_)" d="M196.922,239.516c0-0.755,0.656-1.366,1.462-1.366h11.821
                      c0.806,0,1.464,0.61,1.464,1.366v5.351c0,0.754-0.658,1.367-1.464,1.367h-11.821c-0.806,0-1.462-0.613-1.462-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_154_" gradientUnits="userSpaceOnUse" x1="258.4023" y1="246.915" x2="258.4023" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_154_)" d="M266.566,245.207c0,0.944-0.817,1.708-1.83,1.708h-12.67
                      c-1.011,0-1.827-0.765-1.827-1.708v-6.028c0-0.948,0.816-1.711,1.827-1.711h12.67c1.013,0,1.83,0.763,1.83,1.711V245.207
                      z"/>
                    
                      <linearGradient id="SVGID_155_" gradientUnits="userSpaceOnUse" x1="258.4014" y1="246.2339" x2="258.4014" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_155_)" d="M251.028,239.516c0-0.755,0.655-1.366,1.464-1.366h11.819
                      c0.81,0,1.463,0.61,1.463,1.366v5.351c0,0.754-0.653,1.367-1.463,1.367h-11.819c-0.809,0-1.464-0.613-1.464-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_156_" gradientUnits="userSpaceOnUse" x1="294.4746" y1="246.915" x2="294.4746" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_156_)" d="M302.639,245.207c0,0.944-0.818,1.708-1.829,1.708h-12.673
                      c-1.01,0-1.826-0.765-1.826-1.708v-6.028c0-0.948,0.816-1.711,1.826-1.711h12.673c1.011,0,1.829,0.763,1.829,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_157_" gradientUnits="userSpaceOnUse" x1="294.4756" y1="246.2339" x2="294.4756" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_157_)" d="M287.102,239.516c0-0.755,0.655-1.366,1.464-1.366h11.819
                      c0.809,0,1.465,0.61,1.465,1.366v5.351c0,0.754-0.656,1.367-1.465,1.367h-11.819c-0.809,0-1.464-0.613-1.464-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_158_" gradientUnits="userSpaceOnUse" x1="276.5605" y1="246.915" x2="276.5605" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_158_)" d="M284.726,245.207c0,0.944-0.818,1.708-1.831,1.708H270.22
                      c-1.007,0-1.824-0.765-1.824-1.708v-6.028c0-0.948,0.817-1.711,1.824-1.711h12.675c1.013,0,1.831,0.763,1.831,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_159_" gradientUnits="userSpaceOnUse" x1="276.5596" y1="246.2339" x2="276.5596" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_159_)" d="M269.187,239.516c0-0.755,0.653-1.366,1.463-1.366h11.818
                      c0.812,0,1.465,0.61,1.465,1.366v5.351c0,0.754-0.653,1.367-1.465,1.367h-11.818c-0.81,0-1.463-0.613-1.463-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_160_" gradientUnits="userSpaceOnUse" x1="312.6309" y1="246.915" x2="312.6309" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_160_)" d="M320.794,245.207c0,0.944-0.815,1.708-1.826,1.708h-12.673
                      c-1.011,0-1.828-0.765-1.828-1.708v-6.028c0-0.948,0.817-1.711,1.828-1.711h12.673c1.011,0,1.826,0.763,1.826,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_161_" gradientUnits="userSpaceOnUse" x1="312.6328" y1="246.2339" x2="312.6328" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_161_)" d="M305.259,239.516c0-0.755,0.654-1.366,1.463-1.366h11.818
                      c0.809,0,1.468,0.61,1.468,1.366v5.351c0,0.754-0.659,1.367-1.468,1.367h-11.818c-0.809,0-1.463-0.613-1.463-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_162_" gradientUnits="userSpaceOnUse" x1="330.4229" y1="246.915" x2="330.4229" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_162_)" d="M338.588,245.207c0,0.944-0.816,1.708-1.829,1.708h-12.673
                      c-1.009,0-1.828-0.765-1.828-1.708v-6.028c0-0.948,0.819-1.711,1.828-1.711h12.673c1.013,0,1.829,0.763,1.829,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_163_" gradientUnits="userSpaceOnUse" x1="330.4219" y1="246.2339" x2="330.4219" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_163_)" d="M323.052,239.516c0-0.755,0.654-1.366,1.458-1.366h11.825
                      c0.808,0,1.458,0.61,1.458,1.366v5.351c0,0.754-0.65,1.367-1.458,1.367H324.51c-0.804,0-1.458-0.613-1.458-1.367V239.516
                      z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_164_" gradientUnits="userSpaceOnUse" x1="348.3389" y1="246.915" x2="348.3389" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_164_)" d="M356.504,245.207c0,0.944-0.82,1.708-1.828,1.708h-12.674
                      c-1.013,0-1.828-0.765-1.828-1.708v-6.028c0-0.948,0.815-1.711,1.828-1.711h12.674c1.008,0,1.828,0.763,1.828,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_165_" gradientUnits="userSpaceOnUse" x1="348.3369" y1="246.2339" x2="348.3369" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_165_)" d="M340.964,239.516c0-0.755,0.658-1.366,1.461-1.366h11.824
                      c0.808,0,1.461,0.61,1.461,1.366v5.351c0,0.754-0.653,1.367-1.461,1.367h-11.824c-0.803,0-1.461-0.613-1.461-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_166_" gradientUnits="userSpaceOnUse" x1="366.4961" y1="246.915" x2="366.4961" y2="237.4678">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_166_)" d="M374.659,245.207c0,0.944-0.816,1.708-1.827,1.708h-12.674
                      c-1.009,0-1.825-0.765-1.825-1.708v-6.028c0-0.948,0.816-1.711,1.825-1.711h12.674c1.011,0,1.827,0.763,1.827,1.711
                      V245.207z"/>
                    
                      <linearGradient id="SVGID_167_" gradientUnits="userSpaceOnUse" x1="366.4941" y1="246.2339" x2="366.4941" y2="238.1504">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_167_)" d="M359.122,239.516c0-0.755,0.655-1.366,1.466-1.366h11.815
                      c0.809,0,1.464,0.61,1.464,1.366v5.351c0,0.754-0.655,1.367-1.464,1.367h-11.815c-0.811,0-1.466-0.613-1.466-1.367
                      V239.516z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_168_" gradientUnits="userSpaceOnUse" x1="323.3711" y1="262.624" x2="323.3711" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_168_)" d="M315.771,260.918c0,0.943,0.817,1.706,1.828,1.706h11.546
                      c1.011,0,1.828-0.763,1.828-1.706v-10.701c0-0.941-0.817-1.705-1.828-1.705h-11.546c-1.011,0-1.828,0.764-1.828,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_169_" gradientUnits="userSpaceOnUse" x1="323.3711" y1="262.0557" x2="323.3711" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_169_)" d="M330.178,260.693c0,0.751-0.652,1.362-1.458,1.362h-10.696
                      c-0.808,0-1.46-0.611-1.46-1.362v-10.245c0-0.757,0.652-1.367,1.46-1.367h10.696c0.806,0,1.458,0.61,1.458,1.367V260.693
                      z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_170_" gradientUnits="userSpaceOnUse" x1="271.0918" y1="262.624" x2="271.0918" y2="248.5127">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_170_)" d="M263.492,260.918c0,0.943,0.817,1.706,1.826,1.706h11.545
                      c1.012,0,1.828-0.763,1.828-1.706v-10.701c0-0.941-0.816-1.705-1.828-1.705h-11.545c-1.009,0-1.826,0.764-1.826,1.705
                      V260.918z"/>
                    
                      <linearGradient id="SVGID_171_" gradientUnits="userSpaceOnUse" x1="271.0918" y1="262.0557" x2="271.0918" y2="249.0815">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_171_)" d="M277.9,260.693c0,0.751-0.657,1.362-1.462,1.362h-10.696
                      c-0.806,0-1.459-0.611-1.459-1.362v-10.245c0-0.757,0.653-1.367,1.459-1.367h10.696c0.805,0,1.462,0.61,1.462,1.367
                      V260.693z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_172_" gradientUnits="userSpaceOnUse" x1="138.4731" y1="294.3311" x2="138.4731" y2="280.2109">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_172_)" d="M124.169,292.623c0,0.943,0.818,1.708,1.827,1.708h24.954
                      c1.008,0,1.828-0.765,1.828-1.708v-10.699c0-0.943-0.82-1.713-1.828-1.713h-24.954c-1.009,0-1.827,0.77-1.827,1.713
                      V292.623z"/>
                    
                      <linearGradient id="SVGID_173_" gradientUnits="userSpaceOnUse" x1="138.4722" y1="293.7617" x2="138.4722" y2="280.7842">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_173_)" d="M151.983,292.397c0,0.752-0.653,1.364-1.457,1.364h-24.102
                      c-0.809,0-1.463-0.612-1.463-1.364v-10.249c0-0.751,0.654-1.364,1.463-1.364h24.102c0.804,0,1.457,0.613,1.457,1.364
                      V292.397z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_174_" gradientUnits="userSpaceOnUse" x1="366.8506" y1="328.165" x2="366.8506" y2="319.6787">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_174_)" d="M359.002,321.384c0-0.941,0.817-1.705,1.828-1.705h12.04
                      c1.012,0,1.829,0.764,1.829,1.705v5.075c0,0.944-0.817,1.706-1.829,1.706h-12.04c-1.011,0-1.828-0.762-1.828-1.706
                      V321.384z"/>
                    
                      <linearGradient id="SVGID_175_" gradientUnits="userSpaceOnUse" x1="366.8496" y1="327.5879" x2="366.8496" y2="320.2549">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_175_)" d="M374.195,326.222c0,0.753-0.648,1.366-1.461,1.366h-11.768
                      c-0.809,0-1.463-0.613-1.463-1.366v-4.6c0-0.755,0.654-1.367,1.463-1.367h11.768c0.813,0,1.461,0.612,1.461,1.367
                      V326.222z"/>
                  </g>
                </g>
                <g>
                  <g>
                    
                      <linearGradient id="SVGID_176_" gradientUnits="userSpaceOnUse" x1="349.5605" y1="328.1416" x2="349.5605" y2="311.8373">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_176_)" d="M357.409,319.854v-6.307c0-0.941-0.817-1.71-1.827-1.71H343.54
                      c-1.007,0-1.827,0.769-1.827,1.71v6.307H357.409z"/>
                    
                      <linearGradient id="SVGID_177_" gradientUnits="userSpaceOnUse" x1="349.5605" y1="328.1416" x2="349.5605" y2="311.8362">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_177_)" d="M341.713,320.108v6.327c0,0.942,0.82,1.706,1.827,1.706h12.042
                      c1.01,0,1.827-0.764,1.827-1.706v-6.327H341.713z"/>
                    <g>
                      
                        <linearGradient id="SVGID_178_" gradientUnits="userSpaceOnUse" x1="349.5605" y1="319.6602" x2="349.5605" y2="312.416">
                        <stop  offset="0" style="stop-color:#59595B"/>
                        <stop  offset="1" style="stop-color:#0D0D0D"/>
                      </linearGradient>
                      <path fill="url(#SVGID_178_)" d="M356.906,319.66v-5.877c0-0.752-0.653-1.367-1.461-1.367H343.68
                        c-0.81,0-1.466,0.615-1.466,1.367v5.877H356.906z"/>
                      
                        <linearGradient id="SVGID_179_" gradientUnits="userSpaceOnUse" x1="349.5605" y1="327.5625" x2="349.5605" y2="320.3213">
                        <stop  offset="0" style="stop-color:#59595B"/>
                        <stop  offset="1" style="stop-color:#0D0D0D"/>
                      </linearGradient>
                      <path fill="url(#SVGID_179_)" d="M342.214,320.321v5.876c0,0.752,0.656,1.365,1.466,1.365h11.766
                        c0.808,0,1.461-0.613,1.461-1.365v-5.876H342.214z"/>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <linearGradient id="SVGID_180_" gradientUnits="userSpaceOnUse" x1="331.918" y1="328.165" x2="331.918" y2="319.6787">
                      <stop  offset="0" style="stop-color:#434244"/>
                      <stop  offset="1" style="stop-color:#575757"/>
                    </linearGradient>
                    <path fill="url(#SVGID_180_)" d="M324.07,321.384c0-0.941,0.819-1.705,1.823-1.705h12.045
                      c1.008,0,1.827,0.764,1.827,1.705v5.075c0,0.944-0.819,1.706-1.827,1.706h-12.045c-1.004,0-1.823-0.762-1.823-1.706
                      V321.384z"/>
                    <linearGradient id="SVGID_181_" gradientUnits="userSpaceOnUse" x1="331.918" y1="327.5879" x2="331.918" y2="320.2549">
                      <stop  offset="0" style="stop-color:#59595B"/>
                      <stop  offset="1" style="stop-color:#0D0D0D"/>
                    </linearGradient>
                    <path fill="url(#SVGID_181_)" d="M339.263,326.222c0,0.753-0.653,1.366-1.462,1.366h-11.767
                      c-0.808,0-1.462-0.613-1.462-1.366v-4.6c0-0.755,0.654-1.367,1.462-1.367h11.767c0.809,0,1.462,0.612,1.462,1.367
                      V326.222z"/>
                  </g>
                </g>
              </g>
              <g>
                <linearGradient id="SVGID_182_" gradientUnits="userSpaceOnUse" x1="241.98" y1="68.1646" x2="241.98" y2="92.0877">
                  <stop  offset="0" style="stop-color:#4E4E50;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#59595B"/>
                </linearGradient>
                <path fill="url(#SVGID_182_)" d="M254.498,87.636h-25.035c-0.691,0-1.252-0.561-1.252-1.251l0,0
                  c0-0.691,0.561-1.252,1.252-1.252h25.035c0.691,0,1.251,0.561,1.251,1.252l0,0
                  C255.749,87.075,255.189,87.636,254.498,87.636z"/>
                <linearGradient id="SVGID_183_" gradientUnits="userSpaceOnUse" x1="261.6602" y1="55.2104" x2="261.6602" y2="96.4169">
                  <stop  offset="0" style="stop-color:#4E4E50;stop-opacity:0"/>
                  <stop  offset="1" style="stop-color:#59595B"/>
                </linearGradient>
                <circle fill="url(#SVGID_183_)" cx="261.661" cy="86.593" r="2.156"/>
              </g>
            </g>
            <linearGradient id="SVGID_184_" gradientUnits="userSpaceOnUse" x1="400.8848" y1="91.1367" x2="389.1333" y2="195.2211">
              <stop  offset="0" style="stop-color:#565656;stop-opacity:0"/>
              <stop  offset="0.4778" style="stop-color:#4E4E4E;stop-opacity:0.9414"/>
              <stop  offset="0.5076" style="stop-color:#4D4D4D"/>
              <stop  offset="0.6482" style="stop-color:#525252;stop-opacity:0.7145"/>
              <stop  offset="1" style="stop-color:#5C5C5C;stop-opacity:0"/>
            </linearGradient>
            <polygon fill="url(#SVGID_184_)" points="394.722,88.886 383.595,202.375 394.722,202.562 407.239,87.959 							"/>
            
              <linearGradient id="SVGID_185_" gradientUnits="userSpaceOnUse" x1="250.7852" y1="91.0093" x2="238.9906" y2="195.4754" gradientTransform="matrix(-1 0 0 1 348.25 0)">
              <stop  offset="0" style="stop-color:#565656;stop-opacity:0"/>
              <stop  offset="0.4778" style="stop-color:#4E4E4E;stop-opacity:0.9414"/>
              <stop  offset="0.5076" style="stop-color:#4D4D4D"/>
              <stop  offset="0.6482" style="stop-color:#525252;stop-opacity:0.7145"/>
              <stop  offset="1" style="stop-color:#5C5C5C;stop-opacity:0"/>
            </linearGradient>
            <polygon fill="url(#SVGID_185_)" points="102.375,88.886 117.303,202.375 106.176,202.562 89.857,87.959 							"/>
          </g>
        </g>
        <linearGradient id="SVGID_186_" gradientUnits="userSpaceOnUse" x1="177.6221" y1="188.3062" x2="177.6221" y2="92.3926">
          <stop  offset="0" style="stop-color:#45FFFF"/>
          <stop  offset="0.0052" style="stop-color:#3CF8F8"/>
          <stop  offset="0.0137" style="stop-color:#23E6E3"/>
          <stop  offset="0.0233" style="stop-color:#00CCC6"/>
          <stop  offset="0.2083" style="stop-color:#00C8C5"/>
          <stop  offset="0.3782" style="stop-color:#00BDC2"/>
          <stop  offset="0.5421" style="stop-color:#00ABBC"/>
          <stop  offset="0.7024" style="stop-color:#0090B5"/>
          <stop  offset="0.8587" style="stop-color:#006FAB"/>
          <stop  offset="0.9526" style="stop-color:#0057A4"/>
          <stop  offset="0.9617" style="stop-color:#004B94"/>
          <stop  offset="0.9794" style="stop-color:#002B69"/>
          <stop  offset="1" style="stop-color:#000031"/>
        </linearGradient>
        <polygon fill="url(#SVGID_186_)" points="104.345,92.393 118.096,188.306 250.899,92.393 					"/>
      </g>
      <g>
        <linearGradient id="SVGID_187_" gradientUnits="userSpaceOnUse" x1="167.4849" y1="56.0469" x2="124.0922" y2="229.6181">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_187_)" points="132.115,188.311 169.686,188.311 158.286,102.056 120.715,102.056 
                    "/>
        <g>
          
            <linearGradient id="SVGID_188_" gradientUnits="userSpaceOnUse" x1="329.8135" y1="89.3203" x2="322.672" y2="117.8862" gradientTransform="matrix(-1 0 0 1 689.9863 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_188_)" points="386.65,105.923 340.29,105.923 341.032,102.056 387.393,102.056 
                        "/>
          
            <linearGradient id="SVGID_189_" gradientUnits="userSpaceOnUse" x1="318.2334" y1="102.0737" x2="313.7801" y2="119.887" gradientTransform="matrix(-1 0 0 1 689.9863 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_189_)" points="385.353,113.156 361.986,113.156 362.729,109.288 386.095,109.288 
                        "/>
          
            <linearGradient id="SVGID_190_" gradientUnits="userSpaceOnUse" x1="321.7568" y1="121.3594" x2="317.3035" y2="139.1726" gradientTransform="matrix(-1 0 0 1 689.9863 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_190_)" points="381.829,132.441 358.464,132.441 359.205,128.574 382.571,128.574 
                        "/>
          
            <linearGradient id="SVGID_191_" gradientUnits="userSpaceOnUse" x1="323.4072" y1="113.9219" x2="318.3575" y2="134.1206" gradientTransform="matrix(-1 0 0 1 689.9863 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_191_)" points="383.035,126.229 354.57,126.229 355.312,122.361 383.776,122.361 
                        "/>
          
            <linearGradient id="SVGID_192_" gradientUnits="userSpaceOnUse" x1="313.7139" y1="111.3369" x2="310.4745" y2="124.2944" gradientTransform="matrix(-1 0 0 1 689.9863 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_192_)" points="384.055,119.924 371.074,119.924 371.815,116.057 384.797,116.057 
                        "/>
        </g>
        <g>
          
            <linearGradient id="SVGID_193_" gradientUnits="userSpaceOnUse" x1="705.8701" y1="127.4131" x2="702.2151" y2="142.0331" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_193_)" points="131.666,135.912 155.394,135.912 155.014,133.932 131.286,133.932 
                        "/>
          
            <linearGradient id="SVGID_194_" gradientUnits="userSpaceOnUse" x1="699.9434" y1="133.9419" x2="697.6642" y2="143.0584" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_194_)" points="132.33,139.613 144.289,139.613 143.91,137.634 131.95,137.634 
                        "/>
          
            <linearGradient id="SVGID_195_" gradientUnits="userSpaceOnUse" x1="701.7471" y1="143.8115" x2="699.4677" y2="152.929" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_195_)" points="134.133,149.483 146.092,149.483 145.712,147.504 133.754,147.504 
                        "/>
          
            <linearGradient id="SVGID_196_" gradientUnits="userSpaceOnUse" x1="702.5918" y1="140.0059" x2="700.0076" y2="150.3425" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_196_)" points="133.517,146.304 148.085,146.304 147.706,144.325 133.137,144.325 
                        "/>
          
            <linearGradient id="SVGID_197_" gradientUnits="userSpaceOnUse" x1="697.6318" y1="138.6821" x2="695.9741" y2="145.3134" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <polygon opacity="0.69" fill="url(#SVGID_197_)" points="132.994,143.077 139.638,143.077 139.258,141.098 132.615,141.098 
                        "/>
        </g>
        <linearGradient id="SVGID_198_" gradientUnits="userSpaceOnUse" x1="260.4609" y1="23.416" x2="203.4783" y2="251.3473">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_198_)" points="172.883,143.197 178.845,188.311 276.869,188.311 276.869,143.197 
                    "/>
        <linearGradient id="SVGID_199_" gradientUnits="userSpaceOnUse" x1="271.7783" y1="169.3369" x2="266.4572" y2="190.6216">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon fill="url(#SVGID_199_)" points="263.6,180.522 264.156,184.735 273.311,184.735 273.311,180.522 					"/>
        <linearGradient id="SVGID_200_" gradientUnits="userSpaceOnUse" x1="259.6738" y1="-30.1821" x2="201.3245" y2="203.2158">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_200_)" points="167.458,102.029 172.17,137.686 276.869,137.686 276.869,102.029 
                    "/>
        <g>
          <g>
            <g>
              <g>
                <linearGradient id="SVGID_201_" gradientUnits="userSpaceOnUse" x1="292.2148" y1="143.8701" x2="379.6045" y2="143.8701">
                  <stop  offset="0" style="stop-color:#73CBFD"/>
                  <stop  offset="0.2008" style="stop-color:#70C6FD"/>
                  <stop  offset="0.4439" style="stop-color:#68B7FD"/>
                  <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
                  <stop  offset="0.9875" style="stop-color:#477DFB"/>
                  <stop  offset="1" style="stop-color:#467BFB"/>
                </linearGradient>
                <path opacity="0.69" fill="url(#SVGID_201_)" d="M378.814,144.66h-86.6v-1.579h86.6c0.436,0,0.79,0.353,0.79,0.789l0,0
                  C379.604,144.306,379.25,144.66,378.814,144.66z"/>
                <linearGradient id="SVGID_202_" gradientUnits="userSpaceOnUse" x1="334.9219" y1="143.8701" x2="291.6724" y2="143.8701">
                  <stop  offset="0" style="stop-color:#F9E836"/>
                  <stop  offset="1" style="stop-color:#DB1AB8"/>
                </linearGradient>
                <path fill="url(#SVGID_202_)" d="M332.504,144.66h-40.289v-1.579h40.289c0.437,0,0.789,0.353,0.789,0.789l0,0
                  C333.293,144.306,332.94,144.66,332.504,144.66z"/>
              </g>
            </g>
          </g>
          <g>
            <g>
              <g>
                <linearGradient id="SVGID_203_" gradientUnits="userSpaceOnUse" x1="292.2148" y1="153.6094" x2="379.6045" y2="153.6094">
                  <stop  offset="0" style="stop-color:#73CBFD"/>
                  <stop  offset="0.2008" style="stop-color:#70C6FD"/>
                  <stop  offset="0.4439" style="stop-color:#68B7FD"/>
                  <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
                  <stop  offset="0.9875" style="stop-color:#477DFB"/>
                  <stop  offset="1" style="stop-color:#467BFB"/>
                </linearGradient>
                <path opacity="0.69" fill="url(#SVGID_203_)" d="M378.814,154.399h-86.6v-1.58h86.6c0.436,0,0.79,0.354,0.79,0.79l0,0
                  C379.604,154.045,379.25,154.399,378.814,154.399z"/>
                <linearGradient id="SVGID_204_" gradientUnits="userSpaceOnUse" x1="292.2148" y1="153.6094" x2="355.7979" y2="153.6094">
                  <stop  offset="0" style="stop-color:#0C52FB"/>
                  <stop  offset="0.222" style="stop-color:#2467FC"/>
                  <stop  offset="0.512" style="stop-color:#3C7CFC"/>
                  <stop  offset="0.7792" style="stop-color:#4B89FD"/>
                  <stop  offset="1" style="stop-color:#508EFD"/>
                </linearGradient>
                <path fill="url(#SVGID_204_)" d="M355.01,154.399h-62.795v-1.58h62.795c0.436,0,0.788,0.354,0.788,0.79l0,0
                  C355.798,154.045,355.445,154.399,355.01,154.399z"/>
              </g>
            </g>
          </g>
        </g>
        <g>
          <g>
            <linearGradient id="SVGID_205_" gradientUnits="userSpaceOnUse" x1="340.2578" y1="147.146" x2="354.0427" y2="202.2859">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_205_)" d="M347.338,161.373c-9.526,0-17.247,6.309-17.247,14.091
              c0,7.782,7.721,14.091,17.247,14.091c9.524,0,17.246-6.309,17.246-14.091C364.584,167.681,356.862,161.373,347.338,161.373z
               M347.338,183.368c-5.345,0-9.675-3.539-9.675-7.904c0-4.366,4.33-7.905,9.675-7.905c5.343,0,9.674,3.539,9.674,7.905
              C357.012,179.829,352.681,183.368,347.338,183.368z"/>
          </g>
          <g>
            <linearGradient id="SVGID_206_" gradientUnits="userSpaceOnUse" x1="341.0957" y1="150.4956" x2="353.2501" y2="199.1134">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_206_)" d="M347.338,163.039c-8.398,0-15.206,5.563-15.206,12.425
              c0,6.862,6.808,12.424,15.206,12.424c8.397,0,15.205-5.562,15.205-12.424C362.543,168.602,355.735,163.039,347.338,163.039z
               M347.338,182.434c-4.711,0-8.531-3.121-8.531-6.97c0-3.85,3.82-6.97,8.531-6.97s8.53,3.121,8.53,6.97
              C355.868,179.313,352.049,182.434,347.338,182.434z"/>
            <linearGradient id="SVGID_207_" gradientUnits="userSpaceOnUse" x1="344.2148" y1="154.8486" x2="351.7612" y2="185.034">
              <stop  offset="0" style="stop-color:#F9E836"/>
              <stop  offset="1" style="stop-color:#DB1AB8"/>
            </linearGradient>
            <path fill="url(#SVGID_207_)" d="M358.211,175.046h0.349c2.291,0,3.811-2.431,2.75-4.461
              c-2.316-4.436-7.695-7.545-13.972-7.545c-4.722,0-8.931,1.761-11.715,4.52c-1.543,1.529-0.929,4.164,1.088,4.971l0,0
              c1.229,0.491,2.659,0.163,3.484-0.871c1.521-1.905,4.15-3.165,7.143-3.165c3.764,0,6.951,1.994,8.081,4.758
              C355.873,174.365,357.009,175.046,358.211,175.046z"/>
          </g>
        </g>
        <g>
          <g>
            <linearGradient id="SVGID_208_" gradientUnits="userSpaceOnUse" x1="301.8174" y1="147.2983" x2="315.5284" y2="202.1426">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_208_)" d="M308.857,161.448c-9.473,0-17.152,6.275-17.152,14.016
              c0,7.74,7.68,14.015,17.152,14.015c9.475,0,17.154-6.275,17.154-14.015C326.012,167.723,318.332,161.448,308.857,161.448z
               M308.857,183.326c-5.313,0-9.621-3.52-9.621-7.862c0-4.342,4.308-7.862,9.621-7.862c5.315,0,9.624,3.52,9.624,7.862
              C318.481,179.806,314.173,183.326,308.857,183.326z"/>
          </g>
          <g>
            <linearGradient id="SVGID_209_" gradientUnits="userSpaceOnUse" x1="302.1543" y1="150.4971" x2="314.3082" y2="199.113">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_209_)" d="M308.396,163.039c-8.398,0-15.206,5.563-15.206,12.425
              c0,6.862,6.808,12.424,15.206,12.424c8.397,0,15.206-5.562,15.206-12.424C323.602,168.602,316.793,163.039,308.396,163.039z
               M308.396,182.434c-4.711,0-8.53-3.121-8.53-6.97c0-3.85,3.819-6.97,8.53-6.97s8.53,3.121,8.53,6.97
              C316.926,179.313,313.106,182.434,308.396,182.434z"/>
            <linearGradient id="SVGID_210_" gradientUnits="userSpaceOnUse" x1="301.291" y1="158.5908" x2="306.3682" y2="178.8996">
              <stop  offset="0" style="stop-color:#467BFB"/>
              <stop  offset="0.0125" style="stop-color:#477DFB"/>
              <stop  offset="0.2913" style="stop-color:#5A9FFC"/>
              <stop  offset="0.5561" style="stop-color:#68B7FD"/>
              <stop  offset="0.7992" style="stop-color:#70C6FD"/>
              <stop  offset="1" style="stop-color:#73CBFD"/>
            </linearGradient>
            <path fill="url(#SVGID_210_)" d="M308.396,163.039c-6.222,0-11.561,3.054-13.912,7.427c-0.988,1.839,0.326,4.07,2.413,4.07
              h1.069c1.07,0,2.025-0.631,2.484-1.598c1.237-2.6,4.324-4.444,7.945-4.444c0.655,0,1.293,0.062,1.905,0.178
              c1.181,0.224,2.368-0.321,2.942-1.377l0,0c0.904-1.667-0.11-3.732-1.983-4.03
              C310.333,163.117,309.376,163.039,308.396,163.039z"/>
          </g>
        </g>
        <g>
          <g>
            <linearGradient id="SVGID_211_" gradientUnits="userSpaceOnUse" x1="188.334" y1="100.0347" x2="198.7835" y2="141.833">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_211_)" d="M193.7,110.818c-7.22,0-13.073,4.782-13.073,10.682
              c0,5.9,5.853,10.682,13.073,10.682c7.221,0,13.074-4.782,13.074-10.682C206.773,115.601,200.92,110.818,193.7,110.818z
               M193.7,127.493c-4.05,0-7.334-2.683-7.334-5.993c0-3.309,3.284-5.992,7.334-5.992c4.051,0,7.334,2.683,7.334,5.992
              C201.034,124.81,197.75,127.493,193.7,127.493z"/>
          </g>
          <g>
            <linearGradient id="SVGID_212_" gradientUnits="userSpaceOnUse" x1="188.5898" y1="102.4722" x2="197.8532" y2="139.5258">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_212_)" d="M193.347,112.031c-6.401,0-11.59,4.239-11.59,9.469s5.189,9.47,11.59,9.47
              c6.4,0,11.589-4.24,11.589-9.47S199.747,112.031,193.347,112.031z M193.347,126.813c-3.591,0-6.501-2.378-6.501-5.313
              c0-2.934,2.911-5.312,6.501-5.312s6.501,2.378,6.501,5.312C199.848,124.435,196.938,126.813,193.347,126.813z"/>
            <linearGradient id="SVGID_213_" gradientUnits="userSpaceOnUse" x1="187.9326" y1="108.6411" x2="191.8018" y2="124.118">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_213_)" d="M193.347,112.031c-4.742,0-8.811,2.328-10.603,5.661
              c-0.753,1.401,0.248,3.102,1.838,3.102h0.815c0.816,0,1.544-0.48,1.894-1.217c0.943-1.982,3.296-3.388,6.055-3.388
              c0.5,0,0.986,0.047,1.453,0.136c0.899,0.171,1.805-0.244,2.242-1.049l0,0c0.689-1.27-0.084-2.845-1.511-3.071
              C194.824,112.09,194.094,112.031,193.347,112.031z"/>
          </g>
        </g>
        <g>
          <g>
            <linearGradient id="SVGID_214_" gradientUnits="userSpaceOnUse" x1="221.8818" y1="100.0356" x2="232.3314" y2="141.8339">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_214_)" d="M227.248,110.818c-7.22,0-13.073,4.782-13.073,10.682
              c0,5.9,5.853,10.682,13.073,10.682s13.074-4.782,13.074-10.682C240.322,115.601,234.468,110.818,227.248,110.818z
               M227.248,127.493c-4.05,0-7.334-2.683-7.334-5.993c0-3.309,3.284-5.992,7.334-5.992c4.051,0,7.334,2.683,7.334,5.992
              C234.582,124.81,231.298,127.493,227.248,127.493z"/>
          </g>
          <g>
            <linearGradient id="SVGID_215_" gradientUnits="userSpaceOnUse" x1="222.1377" y1="102.4712" x2="231.4011" y2="139.5248">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_215_)" d="M226.894,112.031c-6.4,0-11.589,4.239-11.589,9.469s5.189,9.47,11.589,9.47
              c6.401,0,11.59-4.24,11.59-9.47S233.295,112.031,226.894,112.031z M226.894,126.813c-3.591,0-6.501-2.378-6.501-5.313
              c0-2.934,2.91-5.312,6.501-5.312s6.502,2.378,6.502,5.312C233.396,124.435,230.485,126.813,226.894,126.813z"/>
            <linearGradient id="SVGID_216_" gradientUnits="userSpaceOnUse" x1="221.4795" y1="108.6411" x2="225.3487" y2="124.118">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_216_)" d="M226.894,112.031c-4.741,0-8.811,2.328-10.603,5.661
              c-0.753,1.401,0.248,3.102,1.839,3.102h0.815c0.816,0,1.544-0.48,1.895-1.217c0.943-1.982,3.295-3.388,6.054-3.388
              c0.5,0,0.986,0.047,1.453,0.136c0.9,0.171,1.805-0.244,2.243-1.049l0,0c0.689-1.27-0.084-2.845-1.511-3.071
              C228.372,112.09,227.642,112.031,226.894,112.031z"/>
          </g>
        </g>
        <linearGradient id="SVGID_217_" gradientUnits="userSpaceOnUse" x1="133.5952" y1="119.0439" x2="150.0415" y2="119.0439">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <path opacity="0.69" fill="url(#SVGID_217_)" d="M138.583,120.088c-2.549,1.091-4.405,3.455-4.988,6.28h16.446
          c-0.765-3.42-3.347-6.039-6.542-6.742c1.345-0.894,2.167-2.376,2.017-3.974c-0.227-2.41-2.572-4.16-5.238-3.909
          s-4.644,2.407-4.418,4.817C136.011,118.158,137.095,119.462,138.583,120.088z"/>
        <path opacity="0.69" fill="#FFFFFF" d="M184.226,183.768l-0.894-0.662l7.631-10.302l5.458,1.169l7.471-0.711l4.94-6.08
          l7.942,3.404l8.879-4.262l3.792-7.208l10.225,0.787l4.576,4.929l5.391-5.391c0.533-4.135,1.335-6.232,2.384-6.232
          c1.06,0,10.56,0.325,11.772,0.367l4.607-1.772l3.994-3.996l0.788,0.787l-4.272,4.206l-4.928,1.896l-0.113-0.004
          c-0.109-0.003-10.757-0.371-11.849-0.371c-0.318,0.263-0.975,2.82-1.303,5.447l-0.024,0.19l-6.477,6.477l-5.066-5.456
          l-9.061-0.697l-3.625,6.886l-9.666,4.639l-7.635-3.272l-4.704,5.789l-8.106,0.771l-4.926-1.056L184.226,183.768z"/>
        <linearGradient id="SVGID_218_" gradientUnits="userSpaceOnUse" x1="256.957" y1="110.5547" x2="258.6751" y2="117.4272">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="245.438" y="113.434" opacity="0.69" fill="url(#SVGID_218_)" width="24.757" height="1.113"/>
        <linearGradient id="SVGID_219_" gradientUnits="userSpaceOnUse" x1="249.4956" y1="116.8701" x2="250.281" y2="120.0117">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="245.438" y="117.884" opacity="0.69" fill="url(#SVGID_219_)" width="8.901" height="1.113"/>
      </g>
      <g>
        
          <linearGradient id="SVGID_220_" gradientUnits="userSpaceOnUse" x1="800.0547" y1="60.2495" x2="793.9106" y2="84.8258" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_220_)" points="215.938,74.363 257.214,74.363 256.553,71.377 215.277,71.377 					
          "/>
        
          <linearGradient id="SVGID_221_" gradientUnits="userSpaceOnUse" x1="789.7451" y1="70.749" x2="785.9941" y2="85.7531" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_221_)" points="217.094,79.948 237.896,79.948 237.236,76.961 216.433,76.961 					
          "/>
        
          <linearGradient id="SVGID_222_" gradientUnits="userSpaceOnUse" x1="792.8809" y1="85.6411" x2="789.1296" y2="100.6461" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_222_)" points="220.23,94.841 241.033,94.841 240.372,91.854 219.57,91.854 					"/>
        
          <linearGradient id="SVGID_223_" gradientUnits="userSpaceOnUse" x1="794.3506" y1="79.7539" x2="790.0684" y2="96.8827" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_223_)" points="219.157,90.044 244.5,90.044 243.84,87.057 218.497,87.057 					"/>
        
          <linearGradient id="SVGID_224_" gradientUnits="userSpaceOnUse" x1="785.7236" y1="78.1963" x2="783.0531" y2="88.8784" gradientTransform="matrix(1 0 0 1 -560.6543 0)">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_224_)" points="218.249,85.175 229.807,85.175 229.146,82.188 217.589,82.188 					
          "/>
      </g>
      <g>
        <linearGradient id="SVGID_225_" gradientUnits="userSpaceOnUse" x1="307.1641" y1="-93.6719" x2="237.5362" y2="184.8405">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <polygon opacity="0.69" fill="url(#SVGID_225_)" points="201.441,54.292 208.551,108.095 325.455,108.095 333.615,54.292 					
          "/>
        <linearGradient id="SVGID_226_" gradientUnits="userSpaceOnUse" x1="200.8066" y1="81.1924" x2="334.2607" y2="81.1924">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_226_)" d="M325.935,108.65H208.063l-7.257-54.916h133.454L325.935,108.65z
           M209.039,107.538h115.938l7.99-52.69H202.076L209.039,107.538z"/>
      </g>
      <g>
        <g>
          <g>
            <linearGradient id="SVGID_227_" gradientUnits="userSpaceOnUse" x1="282.1201" y1="36.8672" x2="303.8213" y2="123.6721">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_227_)" d="M293.265,59.262c-14.995,0-27.15,9.932-27.15,22.184
              c0,12.251,12.155,22.184,27.15,22.184c14.994,0,27.149-9.933,27.149-22.184C320.414,69.193,308.259,59.262,293.265,59.262z
               M293.265,93.89c-8.412,0-15.231-5.571-15.231-12.444s6.819-12.444,15.231-12.444c8.411,0,15.23,5.571,15.23,12.444
              S301.676,93.89,293.265,93.89z"/>
          </g>
          <g>
            <linearGradient id="SVGID_228_" gradientUnits="userSpaceOnUse" x1="282.6504" y1="41.9272" x2="301.8884" y2="118.8794">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_228_)" d="M292.53,61.78c-13.293,0-24.068,8.805-24.068,19.666
              c0,10.86,10.775,19.666,24.068,19.666c13.292,0,24.069-8.805,24.069-19.666C316.6,70.584,305.822,61.78,292.53,61.78z
               M292.53,92.477c-7.457,0-13.501-4.939-13.501-11.032s6.044-11.032,13.501-11.032c7.458,0,13.502,4.939,13.502,11.032
              S299.988,92.477,292.53,92.477z"/>
            <linearGradient id="SVGID_229_" gradientUnits="userSpaceOnUse" x1="281.2852" y1="54.7397" x2="289.3213" y2="86.8843">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_229_)" d="M292.53,61.78c-9.847,0-18.298,4.835-22.019,11.756
              c-1.564,2.91,0.515,6.441,3.819,6.441h1.691c1.696,0,3.206-0.998,3.935-2.529c1.957-4.116,6.844-7.035,12.573-7.035
              c1.039,0,2.048,0.099,3.017,0.282c1.869,0.354,3.75-0.508,4.657-2.18l0,0c1.432-2.638-0.175-5.907-3.14-6.379
              C295.598,61.903,294.083,61.78,292.53,61.78z"/>
          </g>
        </g>
      </g>
      <g>
        <g>
          <g>
            <linearGradient id="SVGID_230_" gradientUnits="userSpaceOnUse" x1="264.8896" y1="221.082" x2="458.7871" y2="221.082">
              <stop  offset="0" style="stop-color:#467BFB"/>
              <stop  offset="0.3138" style="stop-color:#477EFB;stop-opacity:0.6862"/>
              <stop  offset="0.5143" style="stop-color:#4C86FB;stop-opacity:0.4857"/>
              <stop  offset="0.683" style="stop-color:#5595FC;stop-opacity:0.317"/>
              <stop  offset="0.8341" style="stop-color:#60AAFC;stop-opacity:0.1659"/>
              <stop  offset="0.9722" style="stop-color:#6FC5FD;stop-opacity:0.0278"/>
              <stop  offset="1" style="stop-color:#73CBFD;stop-opacity:0"/>
            </linearGradient>
            <path opacity="0.83" fill="url(#SVGID_230_)" d="M448.26,246.788H275.416c-5.813,0-10.526-4.712-10.526-10.527v-40.885
              h193.897v40.885C458.787,242.075,454.073,246.788,448.26,246.788z"/>
            <linearGradient id="SVGID_231_" gradientUnits="userSpaceOnUse" x1="264.8896" y1="206.3926" x2="458.7871" y2="206.3926">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_231_)" d="M264.89,195.376v9.915h129.72c2.988,0,5.865,1.142,8.04,3.192l5.791,5.461
              c2.361,2.225,5.482,3.465,8.728,3.465h41.619v-22.033H264.89z"/>
            <linearGradient id="SVGID_232_" gradientUnits="userSpaceOnUse" x1="415.4824" y1="205.9336" x2="421.7871" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_232_)" cx="418.635" cy="205.934" r="3.152"/>
            <linearGradient id="SVGID_233_" gradientUnits="userSpaceOnUse" x1="430.9082" y1="205.9336" x2="437.2119" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_233_)" cx="434.06" cy="205.934" r="3.152"/>
            <linearGradient id="SVGID_234_" gradientUnits="userSpaceOnUse" x1="446.334" y1="205.9336" x2="452.6377" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_234_)" cx="449.486" cy="205.934" r="3.152"/>
          </g>
          <g>
            <linearGradient id="SVGID_235_" gradientUnits="userSpaceOnUse" x1="286.8828" y1="227.2012" x2="347.9004" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_235_)" points="341.451,231.666 286.883,231.666 293.333,222.736 347.9,222.736 							"/>
            <linearGradient id="SVGID_236_" gradientUnits="userSpaceOnUse" x1="345.916" y1="227.2012" x2="357.8213" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_236_)" points="351.373,231.666 345.916,231.666 352.365,222.736 357.821,222.736 							"/>
            <linearGradient id="SVGID_237_" gradientUnits="userSpaceOnUse" x1="356.8291" y1="227.2012" x2="368.7354" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_237_)" points="362.286,231.666 356.829,231.666 363.278,222.736 368.735,222.736 							"/>
            <linearGradient id="SVGID_238_" gradientUnits="userSpaceOnUse" x1="409.4121" y1="227.2012" x2="421.3184" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_238_)" points="414.869,231.666 409.412,231.666 415.861,222.736 421.318,222.736 							"/>
            <linearGradient id="SVGID_239_" gradientUnits="userSpaceOnUse" x1="420.8223" y1="227.2012" x2="432.7275" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_239_)" points="426.279,231.666 420.822,231.666 427.271,222.736 432.728,222.736 							"/>
            <linearGradient id="SVGID_240_" gradientUnits="userSpaceOnUse" x1="432.2314" y1="227.2012" x2="444.1367" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_240_)" points="437.688,231.666 432.231,231.666 438.68,222.736 444.137,222.736 							"/>
            <linearGradient id="SVGID_241_" gradientUnits="userSpaceOnUse" x1="367.2461" y1="227.2012" x2="411.3965" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_241_)" points="404.948,231.666 367.246,231.666 373.695,222.736 411.396,222.736 							"/>
          </g>
        </g>
        <g opacity="0.81">
          <g>
            <linearGradient id="SVGID_242_" gradientUnits="userSpaceOnUse" x1="264.8896" y1="221.082" x2="458.7871" y2="221.082">
              <stop  offset="0" style="stop-color:#467BFB"/>
              <stop  offset="0.3138" style="stop-color:#477EFB;stop-opacity:0.6862"/>
              <stop  offset="0.5143" style="stop-color:#4C86FB;stop-opacity:0.4857"/>
              <stop  offset="0.683" style="stop-color:#5595FC;stop-opacity:0.317"/>
              <stop  offset="0.8341" style="stop-color:#60AAFC;stop-opacity:0.1659"/>
              <stop  offset="0.9722" style="stop-color:#6FC5FD;stop-opacity:0.0278"/>
              <stop  offset="1" style="stop-color:#73CBFD;stop-opacity:0"/>
            </linearGradient>
            <path opacity="0.83" fill="url(#SVGID_242_)" d="M448.26,246.788H275.416c-5.813,0-10.526-4.712-10.526-10.527v-40.885
              h193.897v40.885C458.787,242.075,454.073,246.788,448.26,246.788z"/>
            <linearGradient id="SVGID_243_" gradientUnits="userSpaceOnUse" x1="264.8896" y1="206.3926" x2="458.7871" y2="206.3926">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <path opacity="0.69" fill="url(#SVGID_243_)" d="M264.89,195.376v9.915h129.72c2.988,0,5.865,1.142,8.04,3.192l5.791,5.461
              c2.361,2.225,5.482,3.465,8.728,3.465h41.619v-22.033H264.89z"/>
            <linearGradient id="SVGID_244_" gradientUnits="userSpaceOnUse" x1="415.4824" y1="205.9336" x2="421.7871" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_244_)" cx="418.635" cy="205.934" r="3.152"/>
            <linearGradient id="SVGID_245_" gradientUnits="userSpaceOnUse" x1="430.9082" y1="205.9336" x2="437.2119" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_245_)" cx="434.06" cy="205.934" r="3.152"/>
            <linearGradient id="SVGID_246_" gradientUnits="userSpaceOnUse" x1="446.334" y1="205.9336" x2="452.6377" y2="205.9336">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <circle opacity="0.69" fill="url(#SVGID_246_)" cx="449.486" cy="205.934" r="3.152"/>
          </g>
          <g>
            <linearGradient id="SVGID_247_" gradientUnits="userSpaceOnUse" x1="286.8828" y1="227.2012" x2="347.9004" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_247_)" points="341.451,231.666 286.883,231.666 293.333,222.736 347.9,222.736 							"/>
            <linearGradient id="SVGID_248_" gradientUnits="userSpaceOnUse" x1="345.916" y1="227.2012" x2="357.8213" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_248_)" points="351.373,231.666 345.916,231.666 352.365,222.736 357.821,222.736 							"/>
            <linearGradient id="SVGID_249_" gradientUnits="userSpaceOnUse" x1="356.8291" y1="227.2012" x2="368.7354" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_249_)" points="362.286,231.666 356.829,231.666 363.278,222.736 368.735,222.736 							"/>
            <linearGradient id="SVGID_250_" gradientUnits="userSpaceOnUse" x1="409.4121" y1="227.2012" x2="421.3184" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_250_)" points="414.869,231.666 409.412,231.666 415.861,222.736 421.318,222.736 							"/>
            <linearGradient id="SVGID_251_" gradientUnits="userSpaceOnUse" x1="420.8223" y1="227.2012" x2="432.7275" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_251_)" points="426.279,231.666 420.822,231.666 427.271,222.736 432.728,222.736 							"/>
            <linearGradient id="SVGID_252_" gradientUnits="userSpaceOnUse" x1="432.2314" y1="227.2012" x2="444.1367" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_252_)" points="437.688,231.666 432.231,231.666 438.68,222.736 444.137,222.736 							"/>
            <linearGradient id="SVGID_253_" gradientUnits="userSpaceOnUse" x1="367.2461" y1="227.2012" x2="411.3965" y2="227.2012">
              <stop  offset="0" style="stop-color:#73CBFD"/>
              <stop  offset="0.2008" style="stop-color:#70C6FD"/>
              <stop  offset="0.4439" style="stop-color:#68B7FD"/>
              <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
              <stop  offset="0.9875" style="stop-color:#477DFB"/>
              <stop  offset="1" style="stop-color:#467BFB"/>
            </linearGradient>
            <polygon fill="url(#SVGID_253_)" points="404.948,231.666 367.246,231.666 373.695,222.736 411.396,222.736 							"/>
          </g>
        </g>
      </g>
      <g>
        <linearGradient id="SVGID_254_" gradientUnits="userSpaceOnUse" x1="465.4629" y1="262.0791" x2="392.5835" y2="262.0791">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="260.581" fill="url(#SVGID_254_)" width="46.73" height="2.996"/>
        <linearGradient id="SVGID_255_" gradientUnits="userSpaceOnUse" x1="465.4609" y1="269.0693" x2="392.583" y2="269.0693">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="267.571" fill="url(#SVGID_255_)" width="30.597" height="2.995"/>
        <linearGradient id="SVGID_256_" gradientUnits="userSpaceOnUse" x1="465.4619" y1="281.8018" x2="392.5836" y2="281.8018">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="280.305" fill="url(#SVGID_256_)" width="18.775" height="2.995"/>
        <linearGradient id="SVGID_257_" gradientUnits="userSpaceOnUse" x1="465.4639" y1="287.4199" x2="392.5836" y2="287.4199">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="285.922" fill="url(#SVGID_257_)" width="34.214" height="2.996"/>
        <linearGradient id="SVGID_258_" gradientUnits="userSpaceOnUse" x1="465.4648" y1="275.5605" x2="392.5824" y2="275.5605">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="274.063" fill="url(#SVGID_258_)" width="8.994" height="2.996"/>
        <linearGradient id="SVGID_259_" gradientUnits="userSpaceOnUse" x1="465.4648" y1="293.2041" x2="392.5824" y2="293.2041">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="406.493" y="291.706" fill="url(#SVGID_259_)" width="8.994" height="2.995"/>
        <linearGradient id="SVGID_260_" gradientUnits="userSpaceOnUse" x1="465.4619" y1="275.5605" x2="392.5828" y2="275.5605">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <rect x="417.99" y="274.063" fill="url(#SVGID_260_)" width="28.279" height="2.996"/>
      </g>
      <g>
        <g>
          <linearGradient id="SVGID_261_" gradientUnits="userSpaceOnUse" x1="144.4658" y1="211.0679" x2="71.5856" y2="211.0679">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <rect x="85.496" y="209.399" fill="url(#SVGID_261_)" width="46.731" height="3.337"/>
          <linearGradient id="SVGID_262_" gradientUnits="userSpaceOnUse" x1="144.4658" y1="218.8564" x2="71.5856" y2="218.8564">
            <stop  offset="0" style="stop-color:#73CBFD"/>
            <stop  offset="0.2008" style="stop-color:#70C6FD"/>
            <stop  offset="0.4439" style="stop-color:#68B7FD"/>
            <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
            <stop  offset="0.9875" style="stop-color:#477DFB"/>
            <stop  offset="1" style="stop-color:#467BFB"/>
          </linearGradient>
          <rect x="85.496" y="217.188" fill="url(#SVGID_262_)" width="30.598" height="3.338"/>
        </g>
        <linearGradient id="SVGID_263_" gradientUnits="userSpaceOnUse" x1="71.936" y1="227.7544" x2="144.629" y2="185.4738">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_263_)" d="M142.24,251.68H88.462c-6.759,0-12.239-5.48-12.239-12.239v-78.998h66.017
          V251.68z"/>
        <linearGradient id="SVGID_264_" gradientUnits="userSpaceOnUse" x1="92.6392" y1="199.3784" x2="117.2194" y2="185.0817">
          <stop  offset="0" style="stop-color:#73CBFD"/>
          <stop  offset="0.2008" style="stop-color:#70C6FD"/>
          <stop  offset="0.4439" style="stop-color:#68B7FD"/>
          <stop  offset="0.7087" style="stop-color:#5A9FFC"/>
          <stop  offset="0.9875" style="stop-color:#477DFB"/>
          <stop  offset="1" style="stop-color:#467BFB"/>
        </linearGradient>
        <path opacity="0.69" fill="url(#SVGID_264_)" d="M96.065,201.933h25.591c0-6.838-3.766-12.625-8.957-14.57
          c2.625-1.382,4.417-4.132,4.417-7.305c0-4.559-3.696-8.255-8.255-8.255c-4.56,0-8.255,3.696-8.255,8.255
          c0,3.173,1.792,5.923,4.417,7.305C99.832,189.309,96.065,195.095,96.065,201.933z"/>
        <g opacity="0.83">
          <linearGradient id="SVGID_265_" gradientUnits="userSpaceOnUse" x1="93.623" y1="241.3872" x2="87.8829" y2="241.3872">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <circle fill="url(#SVGID_265_)" cx="90.224" cy="241.388" r="3.06"/>
          <linearGradient id="SVGID_266_" gradientUnits="userSpaceOnUse" x1="109.7559" y1="241.3872" x2="104.0162" y2="241.3872">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <circle fill="url(#SVGID_266_)" cx="106.357" cy="241.388" r="3.06"/>
          <linearGradient id="SVGID_267_" gradientUnits="userSpaceOnUse" x1="125.8896" y1="241.3872" x2="120.149" y2="241.3872">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <circle fill="url(#SVGID_267_)" cx="122.491" cy="241.388" r="3.06"/>
        </g>
      </g>
      <g class="wifi-icon">
        <linearGradient id="SVGID_268_" gradientUnits="userSpaceOnUse" x1="372.7422" y1="158.8667" x2="418.917" y2="158.8667">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_268_)" cx="395.83" cy="158.867" r="23.087"/>
        <linearGradient id="SVGID_269_" gradientUnits="userSpaceOnUse" x1="372.1865" y1="158.8667" x2="419.4746" y2="158.8667">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_269_)" d="M395.83,182.51c-13.038,0-23.644-10.606-23.644-23.644
          s10.605-23.644,23.644-23.644s23.645,10.606,23.645,23.644S408.868,182.51,395.83,182.51z M395.83,136.336
          c-12.424,0-22.53,10.107-22.53,22.531s10.106,22.531,22.53,22.531s22.53-10.108,22.53-22.531S408.254,136.336,395.83,136.336z"
          />
        <g opacity="0.94">
          <path fill="#FFFFFF" d="M388.029,160.704c-0.727,0.732-0.725,1.915,0.008,2.642c0.732,0.728,1.915,0.724,2.644-0.007
            c3.194-3.215,8.411-3.231,11.626-0.036c0.731,0.728,1.914,0.724,2.643-0.008c0.727-0.731,0.723-1.915-0.009-2.642
            C400.264,156.004,392.677,156.027,388.029,160.704z"/>
          <path fill="#FFFFFF" d="M410.218,155.342c-7.604-7.558-19.94-7.52-27.497,0.084c-0.729,0.732-0.725,1.915,0.007,2.643
            c0.732,0.727,1.915,0.724,2.643-0.008c6.105-6.143,16.069-6.173,22.214-0.068c0.731,0.728,1.914,0.724,2.641-0.008
            C410.953,157.253,410.949,156.07,410.218,155.342z"/>
          <path fill="#FFFFFF" d="M393.982,164.739c-1.432,1.441-1.425,3.78,0.017,5.213s3.779,1.426,5.213-0.016
            c1.433-1.442,1.427-3.78-0.016-5.213C397.755,163.29,395.416,163.297,393.982,164.739z"/>
        </g>
      </g>
      <g>
        <linearGradient id="SVGID_270_" gradientUnits="userSpaceOnUse" x1="375.8955" y1="340.6904" x2="435.2363" y2="340.6904">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_270_)" cx="405.566" cy="340.691" r="29.67"/>
        <linearGradient id="SVGID_271_" gradientUnits="userSpaceOnUse" x1="375.3389" y1="340.6895" x2="435.792" y2="340.6895">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_271_)" d="M405.565,370.917c-16.667,0-30.227-13.56-30.227-30.226
          c0-16.667,13.56-30.229,30.227-30.229s30.227,13.562,30.227,30.229C435.792,357.357,422.232,370.917,405.565,370.917z
           M405.565,311.576c-16.054,0-29.114,13.061-29.114,29.115c0,16.054,13.061,29.113,29.114,29.113s29.113-13.06,29.113-29.113
          C434.679,324.637,421.619,311.576,405.565,311.576z"/>
      </g>
      <g>
        <linearGradient id="SVGID_272_" gradientUnits="userSpaceOnUse" x1="414.6514" y1="316.7695" x2="433.1963" y2="316.7695">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_272_)" cx="423.924" cy="316.77" r="9.272"/>
        <linearGradient id="SVGID_273_" gradientUnits="userSpaceOnUse" x1="414.0957" y1="316.7695" x2="433.7529" y2="316.7695">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_273_)" d="M423.925,326.597c-5.42,0-9.829-4.409-9.829-9.827
          c0-5.419,4.409-9.828,9.829-9.828c5.419,0,9.828,4.409,9.828,9.828C433.753,322.188,429.344,326.597,423.925,326.597z
           M423.925,308.054c-4.806,0-8.717,3.909-8.717,8.716c0,4.806,3.911,8.714,8.717,8.714s8.715-3.908,8.715-8.714
          C432.64,311.963,428.73,308.054,423.925,308.054z"/>
      </g>
      <linearGradient id="SVGID_274_" gradientUnits="userSpaceOnUse" x1="54.1563" y1="240.2754" x2="88.833" y2="240.2754">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path fill="url(#SVGID_274_)" d="M75.481,280.608H65.19c-6.083,0-11.034-4.95-11.034-11.034v-69.632h34.677v1.112H55.269v68.52
        c0,5.471,4.45,9.922,9.921,9.922h10.292V280.608z"/>
      <g>
        <g>
          <linearGradient id="SVGID_275_" gradientUnits="userSpaceOnUse" x1="396.9189" y1="360.8926" x2="415.7718" y2="319.8748">
            <stop  offset="0" style="stop-color:#3A55D2"/>
            <stop  offset="1" style="stop-color:#D327FA"/>
          </linearGradient>
          <path fill="url(#SVGID_275_)" d="M415.359,330.881h-1.783l-2.56-3.607c-0.203-0.286-0.53-0.455-0.88-0.455h-10.221
            c-0.349,0-0.678,0.169-0.88,0.455l-2.561,3.607h-1.783c-2.772,0-5.041,2.269-5.041,5.041v14.664
            c0,2.772,2.269,5.042,5.041,5.042h20.667c2.772,0,5.041-2.27,5.041-5.042v-14.664
            C420.4,333.149,418.132,330.881,415.359,330.881z M405.026,350.559c-4.104,0-7.431-3.326-7.431-7.431s3.327-7.431,7.431-7.431
            c4.104,0,7.431,3.326,7.431,7.431S409.131,350.559,405.026,350.559z"/>
          <linearGradient id="SVGID_276_" gradientUnits="userSpaceOnUse" x1="415.083" y1="333.0713" x2="389.5967" y2="358.5576">
            <stop  offset="0" style="stop-color:#3A55D2"/>
            <stop  offset="1" style="stop-color:#D327FA"/>
          </linearGradient>
          <circle fill="url(#SVGID_276_)" cx="405.026" cy="343.128" r="4.912"/>
        </g>
      </g>
      <g>
        <linearGradient id="SVGID_277_" gradientUnits="userSpaceOnUse" x1="61.7593" y1="280.7012" x2="94.9526" y2="280.7012">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_277_)" cx="78.356" cy="280.7" r="16.597"/>
        <linearGradient id="SVGID_278_" gradientUnits="userSpaceOnUse" x1="61.2026" y1="280.7012" x2="95.5093" y2="280.7012">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_278_)" d="M78.356,297.854c-9.459,0-17.154-7.694-17.154-17.153
          c0-9.457,7.695-17.152,17.154-17.152c9.458,0,17.153,7.695,17.153,17.152C95.509,290.159,87.814,297.854,78.356,297.854z
           M78.356,264.66c-8.845,0-16.041,7.195-16.041,16.04s7.196,16.042,16.041,16.042c8.845,0,16.04-7.197,16.04-16.042
          S87.201,264.66,78.356,264.66z"/>
        <g>
          <linearGradient id="SVGID_279_" gradientUnits="userSpaceOnUse" x1="78.894" y1="263.5615" x2="78.894" y2="289.3751">
            <stop  offset="0" style="stop-color:#F9E836"/>
            <stop  offset="1" style="stop-color:#DB1AB8"/>
          </linearGradient>
          <path fill="url(#SVGID_279_)" d="M85.229,278.388c0-3.499-2.835-6.336-6.335-6.336c-3.499,0-6.335,2.837-6.335,6.336
            c0,0-0.892,6.709,6.335,12.045C86.122,285.097,85.229,278.388,85.229,278.388z"/>
          <path fill="#FFFFFF" d="M79.267,282.961c-2.828,0.223-5.169-2.119-4.946-4.946c0.176-2.224,1.977-4.025,4.201-4.2
            c2.828-0.224,5.168,2.118,4.946,4.945C83.292,280.983,81.49,282.785,79.267,282.961z"/>
        </g>
      </g>
      <g>
        <linearGradient id="SVGID_280_" gradientUnits="userSpaceOnUse" x1="50.0767" y1="200.5908" x2="62.1299" y2="200.5908">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_280_)" cx="56.103" cy="200.591" r="6.027"/>
        <linearGradient id="SVGID_281_" gradientUnits="userSpaceOnUse" x1="49.52" y1="200.5908" x2="62.6865" y2="200.5908">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_281_)" d="M56.103,207.174c-3.63,0-6.583-2.953-6.583-6.583
          c0-3.63,2.953-6.583,6.583-6.583s6.583,2.953,6.583,6.583C62.687,204.221,59.733,207.174,56.103,207.174z M56.103,195.12
          c-3.017,0-5.471,2.454-5.471,5.471c0,3.016,2.454,5.47,5.471,5.47s5.471-2.454,5.471-5.47
          C61.574,197.574,59.12,195.12,56.103,195.12z"/>
      </g>
      <g>
        <linearGradient id="SVGID_282_" gradientUnits="userSpaceOnUse" x1="71.2163" y1="311.8545" x2="83.2705" y2="311.8545">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_282_)" cx="77.243" cy="311.854" r="6.027"/>
        <linearGradient id="SVGID_283_" gradientUnits="userSpaceOnUse" x1="70.6597" y1="311.8555" x2="83.8262" y2="311.8555">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_283_)" d="M77.244,318.438c-3.63,0-6.584-2.953-6.584-6.584
          c0-3.629,2.954-6.583,6.584-6.583c3.629,0,6.583,2.954,6.583,6.583C83.826,315.485,80.873,318.438,77.244,318.438z
           M77.244,306.386c-3.017,0-5.471,2.452-5.471,5.469s2.454,5.471,5.471,5.471c3.017,0,5.47-2.454,5.47-5.471
          S80.26,306.386,77.244,306.386z"/>
      </g>
      <g>
        <linearGradient id="SVGID_284_" gradientUnits="userSpaceOnUse" x1="71.2163" y1="334.6641" x2="83.2705" y2="334.6641">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_284_)" cx="77.243" cy="334.663" r="6.027"/>
        <linearGradient id="SVGID_285_" gradientUnits="userSpaceOnUse" x1="70.6597" y1="334.6641" x2="83.8262" y2="334.6641">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_285_)" d="M77.244,341.247c-3.63,0-6.584-2.954-6.584-6.584
          c0-3.628,2.954-6.582,6.584-6.582c3.629,0,6.583,2.954,6.583,6.582C83.826,338.293,80.873,341.247,77.244,341.247z
           M77.244,329.194c-3.017,0-5.471,2.452-5.471,5.469c0,3.016,2.454,5.47,5.471,5.47c3.017,0,5.47-2.454,5.47-5.47
          C82.714,331.646,80.26,329.194,77.244,329.194z"/>
      </g>
      <g>
        <g>
          <linearGradient id="SVGID_286_" gradientUnits="userSpaceOnUse" x1="49.4097" y1="119.7734" x2="108.8613" y2="119.7734">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <path opacity="0.83" fill="url(#SVGID_286_)" d="M81.199,90.127v-0.002c-0.028-0.002-0.056-0.002-0.083-0.004
            c-0.085-0.005-0.169-0.016-0.254-0.021v0.006c-0.573-0.035-1.147-0.061-1.729-0.061c-16.234,0-29.42,13.016-29.715,29.18
            v0.773H49.41c0.001,0.081,0.006,0.161,0.008,0.241v0.496h0.017c0.522,16.383,14.286,29.424,30.946,28.742
            c15.191-0.621,27.615-12.87,28.436-28.051C109.707,104.96,97.19,91.227,81.199,90.127z M100.06,120.868
            c-0.548,10.793-9.439,19.505-20.24,19.851c-11.613,0.371-21.182-8.713-21.616-20.137v-1.357h-0.013
            c0.292-11.319,9.552-20.406,20.941-20.406c0.59,0,1.173,0.031,1.75,0.079C91.991,99.817,100.643,109.394,100.06,120.868z"/>
          <linearGradient id="SVGID_287_" gradientUnits="userSpaceOnUse" x1="84.3999" y1="89.1157" x2="74.7784" y2="153.5803">
            <stop  offset="0" style="stop-color:#F9E836"/>
            <stop  offset="1" style="stop-color:#DB1AB8"/>
          </linearGradient>
          <path class="rotating-circle" fill="url(#SVGID_287_)" d="M80.861,95.186L80.861,95.186c0,2.018,1.378,3.769,3.337,4.255
            c9.462,2.349,16.385,11.123,15.861,21.426c-0.548,10.792-9.438,19.505-20.24,19.851c-10.592,0.338-19.488-7.187-21.301-17.18
            c-0.374-2.063-2.206-3.541-4.302-3.541l0,0c-2.717,0-4.813,2.451-4.328,5.125c2.59,14.259,15.348,24.974,30.492,24.354
            c15.191-0.621,27.615-12.87,28.436-28.051c0.792-14.655-9.036-27.152-22.481-30.498
            C83.556,90.236,80.861,92.322,80.861,95.186z"/>
        </g>
      </g>
      <linearGradient id="SVGID_288_" gradientUnits="userSpaceOnUse" x1="156.896" y1="302.2441" x2="136.3238" y2="440.0786">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path opacity="0.83" fill="url(#SVGID_288_)" d="M173.227,427.192H112.94V317.036c0-4.395,3.563-7.955,7.956-7.955h60.286
        v110.155C181.183,423.629,177.621,427.192,173.227,427.192z"/>
      <linearGradient id="SVGID_289_" gradientUnits="userSpaceOnUse" x1="112.3843" y1="368.1348" x2="181.7393" y2="368.1348">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path opacity="0.83" fill="url(#SVGID_289_)" d="M173.227,427.746h-60.842v-110.71c0-4.693,3.818-8.513,8.512-8.513h60.843
        v110.713C181.739,423.93,177.92,427.746,173.227,427.746z M113.497,426.634h59.729c4.08,0,7.4-3.318,7.4-7.397v-109.6h-59.73
        c-4.08,0-7.399,3.32-7.399,7.399V426.634z"/>
      <linearGradient id="SVGID_290_" gradientUnits="userSpaceOnUse" x1="148.21" y1="314.1074" x2="146.0343" y2="328.6847">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path opacity="0.83" fill="url(#SVGID_290_)" d="M120.159,318.267v5.563h39.734v5.735h10.506c1.878,0,3.402-1.523,3.402-3.402
        v-7.896H120.159z"/>
      <g opacity="0.83">
        <rect x="120.543" y="335.126" fill="#FFFFFF" width="46.731" height="2.997"/>
        <rect x="120.543" y="342.116" fill="#FFFFFF" width="30.598" height="2.998"/>
        <rect x="120.543" y="354.85" fill="#FFFFFF" width="18.776" height="2.998"/>
        <rect x="120.543" y="360.469" fill="#FFFFFF" width="34.214" height="2.994"/>
        <rect x="120.543" y="348.609" fill="#FFFFFF" width="8.994" height="2.995"/>
        <rect x="120.543" y="366.251" fill="#FFFFFF" width="8.994" height="2.998"/>
        <rect x="132.041" y="348.609" fill="#FFFFFF" width="28.28" height="2.995"/>
      </g>
      <g>
        <linearGradient id="SVGID_291_" gradientUnits="userSpaceOnUse" x1="52.209" y1="139.8589" x2="64.2627" y2="139.8589">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <circle opacity="0.83" fill="url(#SVGID_291_)" cx="58.236" cy="139.859" r="6.027"/>
        <linearGradient id="SVGID_292_" gradientUnits="userSpaceOnUse" x1="51.6528" y1="139.8589" x2="64.8188" y2="139.8589">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_292_)" d="M58.236,146.442c-3.629,0-6.583-2.953-6.583-6.583
          c0-3.63,2.954-6.583,6.583-6.583c3.63,0,6.583,2.953,6.583,6.583C64.819,143.489,61.866,146.442,58.236,146.442z
           M58.236,134.389c-3.016,0-5.47,2.454-5.47,5.471c0,3.016,2.454,5.47,5.47,5.47s5.47-2.454,5.47-5.47
          C63.706,136.843,61.252,134.389,58.236,134.389z"/>
      </g>
      <g>
        <linearGradient id="SVGID_293_" gradientUnits="userSpaceOnUse" x1="79.1904" y1="386.8652" x2="153.3667" y2="386.8652">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_293_)" d="M147.989,396.322H79.19v-12.425c0-3.584,2.906-6.49,6.49-6.49h67.686v13.537
          C153.367,393.914,150.959,396.322,147.989,396.322z"/>
        <linearGradient id="SVGID_294_" gradientUnits="userSpaceOnUse" x1="78.6343" y1="386.8643" x2="153.9233" y2="386.8643">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_294_)" d="M147.989,396.878H78.634v-12.98c0-3.885,3.161-7.047,7.046-7.047h68.243
          v14.094C153.923,394.217,151.261,396.878,147.989,396.878z M79.747,395.767h68.242c2.659,0,4.822-2.164,4.822-4.822v-12.981
          h-67.13c-3.271,0-5.934,2.664-5.934,5.935V395.767z"/>
      </g>
      <g>
        <linearGradient id="SVGID_295_" gradientUnits="userSpaceOnUse" x1="226.6157" y1="428.5898" x2="300.792" y2="428.5898">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_295_)" d="M295.414,434.152h-68.798v-4.638c0-3.584,2.906-6.487,6.49-6.487h67.686v5.747
          C300.792,431.744,298.384,434.152,295.414,434.152z"/>
        <linearGradient id="SVGID_296_" gradientUnits="userSpaceOnUse" x1="226.0596" y1="428.5889" x2="301.3477" y2="428.5889">
          <stop  offset="0" style="stop-color:#467BFB"/>
          <stop  offset="0.3138" style="stop-color:#477EFB"/>
          <stop  offset="0.5143" style="stop-color:#4C86FB"/>
          <stop  offset="0.683" style="stop-color:#5595FC"/>
          <stop  offset="0.8341" style="stop-color:#60AAFC"/>
          <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
          <stop  offset="1" style="stop-color:#73CBFD"/>
        </linearGradient>
        <path opacity="0.83" fill="url(#SVGID_296_)" d="M295.414,434.709H226.06v-5.194c0-3.885,3.161-7.046,7.046-7.046h68.242v6.306
          C301.348,432.048,298.687,434.709,295.414,434.709z M227.172,433.597h68.242c2.659,0,4.821-2.163,4.821-4.822v-5.191h-67.129
          c-3.272,0-5.934,2.661-5.934,5.932V433.597z"/>
      </g>
      <g>
        <polygon fill="#FFFFFF" points="106.911,388.563 85.032,388.563 87.618,384.981 109.496,384.981 					"/>
        <polygon fill="#FFFFFF" points="110.888,388.563 108.701,388.563 111.286,384.981 113.474,384.981 					"/>
        <polygon fill="#FFFFFF" points="115.264,388.563 113.076,388.563 115.662,384.981 117.849,384.981 					"/>
        <polygon fill="#FFFFFF" points="136.347,388.563 134.159,388.563 136.745,384.981 138.933,384.981 					"/>
        <polygon fill="#FFFFFF" points="140.921,388.563 138.733,388.563 141.319,384.981 143.507,384.981 					"/>
        <polygon fill="#FFFFFF" points="145.496,388.563 143.308,388.563 145.894,384.981 148.082,384.981 					"/>
        <polygon fill="#FFFFFF" points="132.369,388.563 117.253,388.563 119.838,384.981 134.955,384.981 					"/>
      </g>
      <g>
        <g>
          <linearGradient id="SVGID_297_" gradientUnits="userSpaceOnUse" x1="159.3008" y1="423.3965" x2="193.4219" y2="423.3965">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <circle opacity="0.83" fill="url(#SVGID_297_)" cx="176.361" cy="423.396" r="17.061"/>
          <linearGradient id="SVGID_298_" gradientUnits="userSpaceOnUse" x1="158.7446" y1="423.3975" x2="193.9785" y2="423.3975">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <path opacity="0.83" fill="url(#SVGID_298_)" d="M176.361,441.015c-9.713,0-17.616-7.906-17.616-17.619
            s7.903-17.615,17.616-17.615c9.714,0,17.618,7.902,17.618,17.615S186.075,441.015,176.361,441.015z M176.361,406.892
            c-9.1,0-16.504,7.405-16.504,16.504c0,9.102,7.404,16.505,16.504,16.505c9.101,0,16.505-7.403,16.505-16.505
            C192.866,414.297,185.461,406.892,176.361,406.892z"/>
        </g>
        <g>
          <linearGradient id="SVGID_299_" gradientUnits="userSpaceOnUse" x1="166.3384" y1="423.3975" x2="186.3843" y2="423.3975">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <circle opacity="0.83" fill="url(#SVGID_299_)" cx="176.361" cy="423.396" r="10.023"/>
          <linearGradient id="SVGID_300_" gradientUnits="userSpaceOnUse" x1="165.7817" y1="423.3965" x2="186.9399" y2="423.3965">
            <stop  offset="0" style="stop-color:#467BFB"/>
            <stop  offset="0.3138" style="stop-color:#477EFB"/>
            <stop  offset="0.5143" style="stop-color:#4C86FB"/>
            <stop  offset="0.683" style="stop-color:#5595FC"/>
            <stop  offset="0.8341" style="stop-color:#60AAFC"/>
            <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
            <stop  offset="1" style="stop-color:#73CBFD"/>
          </linearGradient>
          <path opacity="0.83" fill="url(#SVGID_300_)" d="M176.361,433.976c-5.833,0-10.579-4.746-10.579-10.58
            c0-5.833,4.746-10.579,10.579-10.579c5.833,0,10.579,4.746,10.579,10.579C186.94,429.229,182.194,433.976,176.361,433.976z
             M176.361,413.931c-5.22,0-9.466,4.246-9.466,9.465c0,5.22,4.247,9.468,9.466,9.468s9.467-4.248,9.467-9.468
            C185.828,418.177,181.581,413.931,176.361,413.931z"/>
        </g>
      </g>
      <linearGradient id="SVGID_301_" gradientUnits="userSpaceOnUse" x1="193.6069" y1="426.3633" x2="226.2446" y2="426.3633">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <polygon opacity="0.83" fill="url(#SVGID_301_)" points="226.245,429.887 210.994,429.887 205.059,423.952 193.607,423.952 
        193.607,422.84 205.52,422.84 211.454,428.774 226.245,428.774 				"/>
      
        <radialGradient id="SVGID_302_" cx="-236.688" cy="295.9561" r="6.1731" gradientTransform="matrix(0.3979 -0.9175 0.9175 0.3979 16.8525 88.3975)" gradientUnits="userSpaceOnUse">
        <stop  offset="0" style="stop-color:#FFFFFF"/>
        <stop  offset="0.0338" style="stop-color:#EDEDED"/>
        <stop  offset="0.1436" style="stop-color:#B6B6B6"/>
        <stop  offset="0.2573" style="stop-color:#858585"/>
        <stop  offset="0.3723" style="stop-color:#5C5C5C"/>
        <stop  offset="0.4891" style="stop-color:#3B3B3B"/>
        <stop  offset="0.6083" style="stop-color:#212121"/>
        <stop  offset="0.7307" style="stop-color:#0F0F0F"/>
        <stop  offset="0.8584" style="stop-color:#040404"/>
        <stop  offset="1" style="stop-color:#000000"/>
      </radialGradient>
      <circle fill="url(#SVGID_302_)" cx="194.213" cy="423.32" r="6.174"/>
      <linearGradient id="SVGID_303_" gradientUnits="userSpaceOnUse" x1="232.9209" y1="428.4961" x2="294.4873" y2="428.4961">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path opacity="0.83" fill="url(#SVGID_303_)" d="M293.096,429.887h-58.784c-0.769,0-1.391-0.622-1.391-1.391l0,0
        c0-0.769,0.622-1.39,1.391-1.39h58.784c0.769,0,1.392,0.621,1.392,1.39l0,0C294.487,429.265,293.864,429.887,293.096,429.887z"
        />
      <linearGradient id="SVGID_304_" gradientUnits="userSpaceOnUse" x1="232.9209" y1="428.4961" x2="272.9756" y2="428.4961">
        <stop  offset="0" style="stop-color:#467BFB"/>
        <stop  offset="0.3138" style="stop-color:#477EFB"/>
        <stop  offset="0.5143" style="stop-color:#4C86FB"/>
        <stop  offset="0.683" style="stop-color:#5595FC"/>
        <stop  offset="0.8341" style="stop-color:#60AAFC"/>
        <stop  offset="0.9722" style="stop-color:#6FC5FD"/>
        <stop  offset="1" style="stop-color:#73CBFD"/>
      </linearGradient>
      <path opacity="0.83" fill="url(#SVGID_304_)" d="M271.585,429.887h-37.273c-0.769,0-1.391-0.622-1.391-1.391l0,0
        c0-0.769,0.622-1.39,1.391-1.39h37.273c0.768,0,1.391,0.621,1.391,1.39l0,0C272.976,429.265,272.353,429.887,271.585,429.887z"
        />
    </g>
  </g>
</g>
</g>
</svg>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="py-2">
          <div>
            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid>
              <div class="uk-flex uk-flex-center uk-flex-column overflow-hidden">
                <div class="slider-content">
                  {!! App\Http\Controllers\WelcomeController::renderBlock(2); !!}
                  <a href="{{ URL::to('all-courses') }}" class="common-btn btn-round">Read More &nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            <div class="slider-img">
              <div>
                <img src="{{ asset('front/images/slider2.svg') }}" alt="">
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="icons-wrapper" uk-scrollspy="target: > a; cls: uk-animation-slide-bottom; delay: 300">
        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/3ds.png') }}" alt="3ds">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/ae.png') }}" alt="ae">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/ai.png') }}" alt="ai">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/dn.png') }}" alt="dn">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/id.png') }}" alt="id">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/ma.png') }}" alt="ma">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/pr.png') }}" alt="pr">
        </a>

        <a href="all-courses.html" class="icon__bubble" target="_blank">
          <img class="shadow-6" src="{{ asset('front/images/courses/icons/psd.png') }}" alt="psd">
        </a>
      </div>
    </div>
    </div>
  


<div class="intro-full overflow-hidden">
  <div class="uk-container uk-text-center">
    <div data-uk-scrollspy="target: > h2, h4,p; cls: uk-animation-slide-bottom; delay: 400">
      {!! App\Http\Controllers\WelcomeController::renderBlock(3); !!}
    </div>
    <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@m" data-uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 500" data-uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <img src="{{ asset('front/images/icons/learning-icon.png') }}" alt="Learning">
          {!! App\Http\Controllers\WelcomeController::renderBlock(4); !!}
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <img src="{{ asset('front/images/icons/focus-icon.png') }}" alt="Focus">
          {!! App\Http\Controllers\WelcomeController::renderBlock(5); !!}
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <img src="{{ asset('front/images/icons/bese_value-icon.png') }}" alt="Best Value">
          {!! App\Http\Controllers\WelcomeController::renderBlock(6); !!}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="courses-full" data-uk-parallax="bgy: -200">
  <!-- <canvas class="overlay opacity-95" data-granim="#667eea,#764ba2,#00cdac,#3cba92"></canvas> -->
  <div class="uk-container">
    <div class="courses-content uk-text-center">
      <div data-uk-scrollspy="target: > h4, h2, p; cls: uk-animation-slide-bottom; delay: 200">
        {!! App\Http\Controllers\WelcomeController::renderBlock(7); !!}
      </div>
      <div class="courses-slider" data-uk-scrollspy="cls: uk-animation-slide-bottom; delay: 500">
        <ul class="slider">
          <li class="slider-item active">
            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid>
              <div class="uk-flex uk-flex-column overflow-hidden">
                <div>
                  {!! App\Http\Controllers\WelcomeController::renderBlock(8); !!}
                  <div class="icons-div uk-text-left@m">
                    <img src="{{ asset('front/images/courses/icons/psd.png') }}" alt="psd">
                    <img src="{{ asset('front/images/courses/icons/ai.png') }}" alt="ai">
                    <img src="{{ asset('front/images/courses/icons/dn.png') }}" alt="dn">
                    <img src="{{ asset('front/images/courses/icons/id.png') }}" alt="id">
                  </div>
                </div>
                <div class="sub-content uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                  {!! App\Http\Controllers\WelcomeController::renderBlock(9); !!}
                </div>
              </div>
              <div class="">
                <div class="image-holder">
                  <img src="{{ asset('front/images/courses/graphic-design.jpg') }}" alt="graphic-design">
                </div>
              </div>
            </div>
          </li>
          <li class="slider-item">
            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid>
              <div class="uk-flex uk-flex-column overflow-hidden">
                <div>
                  {!! App\Http\Controllers\WelcomeController::renderBlock(10); !!}
                  <div class="icons-div uk-text-left@m">
                    <img src="{{ asset('front/images/courses/icons/pr.png') }}" alt="pr">
                    <img src="{{ asset('front/images/courses/icons/ae.png') }}" alt="ae">
                  </div>
                </div>
                <div class="sub-content uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                  {!! App\Http\Controllers\WelcomeController::renderBlock(11); !!}
                </div>
              </div>
              <div class="">
                <div class="image-holder">
                  <img src="{{ asset('front/images/courses/video-editing.jpg') }}" alt="video-editing">
                </div>
              </div>
            </div>
          </li>
          <li class="slider-item">
            <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@m" data-uk-grid>
              <div class="uk-flex uk-flex-column overflow-hidden">
                <div>
                  {!! App\Http\Controllers\WelcomeController::renderBlock(12); !!}
                  <div class="icons-div uk-text-left@m">
                    <img src="{{ asset('front/images/courses/icons/3ds.png') }}" alt="3ds">
                    <img src="{{ asset('front/images/courses/icons/ma.png') }}" alt="ma">
                  </div>
                </div>
                <div class="sub-content uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                  {!! App\Http\Controllers\WelcomeController::renderBlock(13); !!}
                </div>
              </div>
              <div class="">
                <div class="image-holder">
                  <img src="{{ asset('front/images/courses/3d-modeling.jpg') }}" alt="3d-modeling">
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="controls">
          <!-- <button class="previous">
            <i class="fas fa-arrow-left"></i>
          </button> -->
          <button class="next">
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      </div>
      <div class="uk-text-center" data-uk-scrollspy="cls: uk-animation-slide-bottom; delay: 500">
        <a href="{{ URL::to('all-courses') }}" class="common-btn btn-round">VIEW ALL CATEGORIES</a>
      </div>
    </div>
  </div>
</div>


@if ($announcements->count() > 0)
<div class="custom-poster-full">
  @if ($announcements->count() > 1)
  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull; autoplay: true">

    <ul class="uk-slideshow-items">
      @foreach ($announcements as $announcement)
      <li>
        <img src="{{ asset('storage') . '/' . $announcement->image }}" alt="{{ $announcement->name }}" uk-cover>
      </li>
      @endforeach
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

  </div>
  @else
    @foreach ($announcements as $announcement)
      <img class="w-100" src="{{ asset('storage') . '/' . $announcement->image }}" alt="{{ $announcement->name }}">
    @endforeach
  @endif
  
</div>
      
@endif

<div class="why-choose-us">
  <div class="uk-container">
    <div class="uk-grid-column-small uk-grid-row-medium uk-flex-middle uk-child-width-1-2@m" data-uk-grid="">
      <div class="overflow-hidden" data-uk-scrollspy="target: > h2,p; cls: uk-animation-slide-left; delay: 100">
        {!! App\Http\Controllers\WelcomeController::renderBlock(14); !!}
      </div>
      <div class="overflow-hidden">
        {!! App\Http\Controllers\WelcomeController::renderBlock(15); !!}
      </div>
    </div>
  </div>
</div>

<div class="about-us">
  <div class="uk-container">
    <div class="uk-grid-column-small uk-grid-row-medium uk-flex-middle uk-child-width-1-2@m" data-uk-grid="">
      <div class="uk-text-center">
        <img src="{{ asset('front/images/ceo.jpg') }}" alt="CEO">
      </div>
      <div class="overflow-hidden" data-uk-scrollspy="target: > h4, h2, li; cls: uk-animation-slide-left; delay: 100">
        {!! App\Http\Controllers\WelcomeController::renderBlock(16); !!}
        <ul class="accordion" data-uk-accordion>
          <li class="uk-open">
              <a class="uk-accordion-title" href="#" aria-expanded="true">Vision</a>
              <div class="uk-accordion-content">
                {!! App\Http\Controllers\WelcomeController::renderBlock(17); !!}
              </div>
          </li>
          <li>
            <a class="uk-accordion-title" href="#">Mission</a>
            <div class="uk-accordion-content">
              {!! App\Http\Controllers\WelcomeController::renderBlock(18); !!}
            </div>
        </li>
      </ul>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('front/js/main.js') }}"></script>
<script>
  $('ul.uk-navbar-nav li:first-child').find('a').addClass('uk-active');
</script>
@endsection
