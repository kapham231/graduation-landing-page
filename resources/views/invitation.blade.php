@extends('layouts.app')

@section('content')

{{-- Section 1: Welcome --}}
<section class="relative min-h-[90vh] flex items-center justify-center text-center text-white bg-gradient-to-b from-blue-50 to-blue-100 px-6 md:px-12">
    
    <!-- Background image -->
    <div class="absolute inset-0 flex items-center justify-center">
        <img src="{{ asset('images/hcmut.jpg') }}"
             class="w-full h-full object-cover blur-[2px]">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl px-6 md:px-12 lg:px-0 space-y-8">
        <h1 class="text-5xl md:text-6xl lg:text-6xl font-extrabold wow animate__animated animate__fadeInDown">
            <i class="bi bi-mortarboard"></i> Chào Mọi Người!
        </h1>
        <p class="text-lg md:text-xl lg:text-xl opacity-90 wow animate__animated animate__fadeInUp">
            Cảm ơn các bạn đã luôn ở bên, hỗ trợ và tạo nên những kỷ niệm khó quên, làm cho hành trình học tập và phát triển của mình tại Bách khoa trở nên trọn vẹn và ý nghĩa hơn bao giờ hết.
        </p>
        <a href="#invitation"
        class="inline-block bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400 text-white font-semibold px-8 py-4 rounded-xl shadow-lg transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:from-cyan-400 hover:via-indigo-500 hover:to-blue-600 wow animate__animated animate__fadeInUp"
        data-wow-duration="1s" data-wow-delay="0.6s"
        onclick="document.querySelector('#invitation').scrollIntoView({ behavior: 'smooth' }); return false;">
        Đi đến Lời Mời
        </a>
    </div>

</section>


{{-- Section 2: Kỷ niệm --}}
<section class="bg-gradient-to-b from-blue-50 via-blue-100 to-blue-200 dark:bg-background-dark py-16 md:py-24 text-center">
    <div class="max-w-3xl mx-auto px-6 md:px-8">
        <h2 class="text-3xl font-bold leading-tight tracking-tight text-primary dark:text-white md:text-4xl 
            wow animate__animated animate__fadeInUp" data-wow-duration="1s">
            Nhìn lại hành trình
        </h2>

        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 
            wow animate__animated animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
            Một chặng đường đầy ắp kỷ niệm từ những ngày đầu bỡ ngỡ đến lúc khoác lên chiếc lễ phục tốt nghiệp. 
            Những động lực, những người bạn, những người đã đi cùng mình trong hành trình 4 năm tại Bách khoa
        </p>
    </div>

    <!-- Blue Divider on Mobie -->
    <div class="block md:hidden">
        <div class="h-1 w-1/2 mt-8 mx-auto bg-gradient-to-r from-blue-600 via-indigo-500 to-cyan-400"></div>
    </div>

    <!-- Kỳ quân sự -->
    <section class="bg-primary-light/30 dark:bg-slate-800/50 py-16 md:py-24">
        <div class="w-full max-w-5xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="md:w-1/3 text-center md:text-right wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">Kỳ quân sự</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">Những người bạn đầu tiên trên hành trình</h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Cũng từ những buổi sinh hoạt, rèn luyện và làm quen trong môi trường mới ấy, 
                        mình có được những người bạn đầu tiên – những người đã đồng hành cùng mình trong các môn học, đồ án trong 4 năm đại học.
                    </p>
                </div>
                <div class="md:w-2/3 grid grid-cols-2 gap-4">
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <img alt="Ảnh kỷ niệm năm nhất" class="h-full w-full object-cover aspect-[2/1]" src="{{ asset("images/qs/qs1.jpg") }}"/>
                    </div>
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Bạn bè năm nhất" class="h-full w-full object-cover object-[center_top] aspect-[2/1]" src="{{ asset("images/qs/qs2.jpg") }}"/>
                    </div>
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Khuôn viên trường" class="h-full w-full object-cover aspect-[2/1]" src="{{ asset("images/qs/qs3.jpg") }}"/>
                    </div>
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Hoạt động ngoại khóa" class="h-full w-full object-cover object-[center_top] aspect-[2/1.1]" src="{{ asset("images/qs/qs4.jpg") }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ban Xung Kích -->
    <section class=" dark:bg-background-dark py-16 md:py-24">
        <div class="w-full max-w-5xl mx-auto px-4">
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                <div class="md:w-1/3 text-center md:text-left wow animate__animated animate__fadeInRight" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">Ban Xung Kích - Khoa Kỹ Thuật Xây Dựng</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">Bắt đầu tham gia vào các hoạt động đội nhóm - câu lạc bộ</h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Tại đây, mình bắt đầu được tham gia vào các dự án truyền thông, hoạt động Xuân Tình Nguyện 
                        và nhiều chương trình tình nguyện khác. Nhờ làm việc cùng các anh chị và bạn bè trong CLB, 
                        mình học được rất nhiều kỹ năng mềm và những điều mới mẻ từ họ, mở rộng mối quan hệ và gắn bó hơn với môi trường Bách khoa. 
                    </p>
                </div>
                <div class="md:w-2/3 grid grid-cols-2 gap-4">
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                        <img src="{{ asset('images/bxk/bxk1.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.15s">
                        <img src="{{ asset('images/bxk/bxk2.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInRight" data-wow-delay="0.15s">
                        <img src="{{ asset('images/bxk/bxk3.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                        <img src="{{ asset('images/bxk/bxk4.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInRight" data-wow-delay="0.2s">
                        <img src="{{ asset('images/bxk/bxk5.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                        <img src="{{ asset('images/bxk/bxk6.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>

                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">
                        <img src="{{ asset('images/bxk/bxk7.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">
                        <img src="{{ asset('images/bxk/bxk8.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                        <img src="{{ asset('images/bxk/bxk9.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInLeft" data-wow-delay="0.35s">
                        <img src="{{ asset('images/bxk/bxk10.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- F4 Truyện Thông -->
    <section class="dark:bg-slate-800/50 py-16 md:py-24">
        <div class="w-full max-w-5xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="md:w-1/3 text-center md:text-right wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">F4 Ban Truyền Thông</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">Từ 4 thành viên trong Ban Truyền Thông đến F4 Truyền Thông</h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Từ bốn con người có tính cách tương đồng, cùng làm việc trong Ban Truyền Thông, 
                        chúng mình dần trở nên thân thiết qua những buổi bàn ý tưởng và thực hiện dự án. 
                        Từng hoạt động nhỏ đã gắn kết F4 lại với nhau, để rồi đến tận bây giờ gắn bó như anh chị em thực sự.
                    </p>
                </div>
                <div class="md:w-2/3 grid grid-cols-3 gap-4">
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md wow animate__animated animate__zoomIn" data-wow-delay="0.1s">
                        <img alt="Thuyết trình đồ án" class="h-full w-full object-cover aspect-video" src="{{ asset("images/f4/4ae1.jpg") }}"/>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Làm việc nhóm" class="h-full w-full object-cover object-[right_top] aspect-square" src="{{ asset("images/f4/4ae2.jpg") }}"/>
                    </div>
                    <div class="col-span-3 rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <img alt="Sản phẩm đồ án" class="h-full w-full object-cover object-[center_bottom] aspect-[2/1]" src="{{ asset("images/f4/4ae3.jpg") }}"/>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <img alt="Nghiên cứu" class="h-full w-full object-cover object-[center_right] aspect-square" src="{{ asset("images/f4/4ae4.jpg") }}"/>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                        <img alt="Thảo luận" class="h-full w-full object-cover aspect-square" src="{{ asset("images/f4/4ae5.jpg") }}"/>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-md wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                        <img alt="Thư giãn" class="h-full w-full object-cover object-[right_bottom] aspect-square" src="{{ asset("images/f4/4ae6.jpg") }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anh em -->
    <section class="dark:bg-background-dark py-16 md:py-24">
        <div class="w-full max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                <!-- TEXT -->
                <div class="md:w-1/3 text-center md:text-left 
                     wow animate__animated animate__fadeInRight" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">Anh em KTX - Anh em VNPT - Anh em 10T1</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">
                        Những người bạn đáng quý góp mặt trong hành trình của mình
                    </h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                       Anh em KTX là những người đã cùng mình sống 4 năm trong ký túc xá, dù có người chuyển ra trọ nhưng vẫn giữ được 
                       sự gắn bó như những ngày đầu. Anh em VNPT là những đồng môn đã đồng hành trong kỳ thực tập, 
                       cùng chia sẻ kiến thức và thực hiện những dự án thực tế đầu tiên. Còn anh em 10T1 là những người bạn từ thời cấp 3, 
                       luôn gặp nhau mỗi dịp lễ và chia sẻ với nhau về học tập, công việc lẫn cuộc sống. 
                       Tất cả đã tạo nên những mối quan hệ quý giá trong hành trình của mình.
                    </p>
                </div>

                <!-- IMAGE GRID -->
                <div class="md:w-2/3 grid grid-cols-2 md:grid-cols-4 gap-4">

                    <!-- Hình lớn trên -->
                    <div class="col-span-2 md:col-span-4 rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__zoomIn" data-wow-duration="1s">
                        <img src="{{ asset('images/ae/ktx1.jpg') }}" class="h-full w-full object-cover object-[center_bottom] aspect-[2/1]">
                    </div>

                    <!-- 2 hình ngang -->
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('images/ae/ktx2.jpg') }}" class="w-full h-full object-[center_bottom] object-cover aspect-[2/1]">
                    </div>

                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.35s">
                        <img src="{{ asset('images/ae/ktx3.jpg') }}" class="w-full h-full object-[center_bottom] object-cover aspect-[2/1]">
                    </div>

                    <!-- 4 hình nhỏ -->
                    <div class="rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeIn" data-wow-delay="0.45s">
                        <img src="{{ asset('images/ae/ktx4.jpg') }}" class="w-full h-32 object-cover">
                    </div>

                    <div class="rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeIn" data-wow-delay="0.55s">
                        <img src="{{ asset('images/ae/ktx5.jpg') }}" class="w-full h-32 object-cover">
                    </div>

                    <div class="rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeIn" data-wow-delay="0.65s">
                        <img src="{{ asset('images/ae/ktx8.jpg') }}" class="w-full h-32 object-cover">
                    </div>

                    <div class="rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeIn" data-wow-delay="0.75s">
                        <img src="{{ asset('images/ae/ktx7.jpg') }}" class="w-full h-32 object-cover">
                    </div>

                    <!-- Hình kết ngang -->
                    <div class="col-span-2 md:col-span-4 rounded-lg overflow-hidden shadow-md 
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.9s">
                        <img src="{{ asset('images/ae/ktx6.jpg') }}" class="w-full h-full object-cover aspect-[2/1]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sheraton -->
    <section class="dark:bg-slate-800/50 py-16 md:py-24">
        <div class="w-full max-w-5xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <!-- TEXT -->
                <div class="md:w-1/3 text-center md:text-right
                    wow animate__animated animate__fadeInLeft" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">Sheraton Saigon Grand Opera Hotel</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">
                        Nơi kiếm "cơm" 2 năm đại học
                    </h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                       Đây là nơi mình bắt đầu công việc làm thêm thời đại học, gặp gỡ những người anh, những người bạn đồng hành 
                       cùng nhau kiếm thêm thu nhập. Nhớ những buổi làm từ 11 giờ khuya đến 7 giờ sáng rồi chạy về đi học. 
                       Bắt đầu đảm nhận công việc từ lúc khách sạn còn mang tên Sheraton Saigon Hotel & Towers, và kết thúc công việc khi khách sạn đã đổi 
                       tên thành Sheraton Saigon Grand Opera Hotel như hiện tại. Cũng tại đây, tôi gặp anh Vũ Hoàng Dương – một người 
                       anh đồng hương và cũng là cấp trên trực tiếp, người đã hướng dẫn tôi từ những ngày đầu bỡ ngỡ với công việc 
                       và dần tin tưởng giao cho tôi nhiều trách nhiệm quản lý, giúp tôi trở nên tự tin hơn trong giao tiếp và rèn 
                       luyện sự tỉ mỉ trong công việc.
                    </p>
                </div>

                <!-- IMAGE GRID -->
                <div class="md:w-2/3 grid grid-cols-2 gap-4">

                    <!-- Ảnh lớn trên -->
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__zoomIn" data-wow-duration="1s">
                        <img alt="Bảo vệ khóa luận" class="h-full w-full object-cover aspect-video" src="{{ asset('images/she/she1.jpg') }}"/>
                    </div>

                    <!-- Ảnh vuông 1 -->
                    <div class="rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Lễ tốt nghiệp sớm" class="h-full w-full object-cover object-[center_bottom] aspect-square" src="{{ asset('images/she/she2.jpg') }}"/>
                    </div>

                    <!-- Ảnh vuông 2 -->
                    <div class="rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.35s">
                        <img alt="Tạm biệt bạn bè" class="h-full w-full object-cover object-[center_bottom] aspect-square" src="{{ asset('images/she/she3.jpg') }}"/>
                    </div>

                    <!-- Ảnh lớn dưới -->
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                        <img alt="Chụp ảnh kỷ yếu" class="h-full w-full object-cover aspect-video" src="{{ asset('images/she/she4.jpg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gia đình -->
    <section class="dark:bg-slate-800/50 py-16 md:py-24">
        <div class="w-full max-w-5xl mx-auto px-4">
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">

                <!-- TEXT -->
                <div class="md:w-1/3 text-center md:text-left
                    wow animate__animated animate__fadeInRight" data-wow-duration="1s">
                    <p class="text-sm font-semibold text-primary">Gia đình</p>
                    <h3 class="mt-1 text-3xl font-bold text-text-light dark:text-white">Động lực mạnh mẽ nhất trên hành trình</h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                       Gia đình – cha mẹ, anh chị em và "em" – luôn là điểm tựa vững chắc nhất trong chặng đường của mình. 
                       Mỗi khi học tập hay công việc gặp khó khăn, những lúc mọi thứ không như ý, họ luôn ở bên cổ vũ, động viên 
                       và nhắc nhở mình kiên nhẫn, cố gắng. Tình cảm, sự quan tâm và những lời khuyên của gia đình đã giúp tôi có 
                       thêm sức mạnh vượt qua thử thách, hoàn thành những mục tiêu quan trọng và trưởng thành hơn trên hành trình 
                       học tập cũng như cuộc sống.
                    </p>
                </div>

                <!-- IMAGE GRID -->
                <div class="md:w-2/3 grid grid-cols-2 gap-4">

                    <!-- Ảnh lớn trên -->
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__zoomIn" data-wow-duration="1s">
                        <img alt="Bảo vệ khóa luận" class="h-full w-full object-cover object-[center_bottom] aspect-video" src="{{ asset('images/gd/gd1.jpg') }}"/>
                    </div>

                    <!-- Ảnh vuông trái -->
                    <div class="rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                        <img alt="Lễ tốt nghiệp sớm" class="h-full w-full object-cover object-[center_bottom] aspect-square" src="{{ asset('images/gd/gd2.jpg') }}"/>
                    </div>

                    <!-- Ảnh vuông phải -->
                    <div class="rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.35s">
                        <img alt="Tạm biệt bạn bè" class="h-full w-full object-cover object-[center_top] aspect-square" src="{{ asset('images/gd/gd3.jpg') }}"/>
                    </div>

                    <!-- Ảnh lớn dưới -->
                    <div class="col-span-2 rounded-lg overflow-hidden shadow-md
                        wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                        <img alt="Chụp ảnh kỷ yếu" class="h-full w-full object-cover aspect-video" src="{{ asset('images/gd/gd4.jpg') }}"/>
                    </div>

                </div>

            </div>
        </div>
    </section>
</section>


{{-- Section 3: Lời mời --}}
<section id="invitation" class="py-16 md:py-24 bg-gray-50 dark:bg-slate-900">
    <div class="w-full max-w-5xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-text-light dark:text-white">Trân Trọng Kính Mời</h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Đến tham dự buổi lễ tốt nghiệp của mình.</p>
        </div>
        <div class="flex flex-col lg:flex-row items-stretch bg-white dark:bg-slate-800 shadow-2xl rounded-xl overflow-hidden">
            <!-- IMAGE LEFT -->
            <div class="w-full lg:w-1/2 aspect-[4/3] lg:aspect-auto bg-cover bg-center" 
                style="background-image: url('/mnt/data/9b9b04e7-792c-4ab0-967b-8a210d93e46e.png');">
            </div>

            <!-- CONTENT RIGHT -->
            <div class="w-full lg:w-1/2 p-6 lg:p-10 flex flex-col justify-center gap-4">
                <p class="text-sm font-bold uppercase tracking-wider text-primary">Lễ Tốt Nghiệp Cử Nhân</p>
                <h3 class="text-3xl md:text-4xl font-bold text-text-light dark:text-white leading-tight">
                    Buổi lễ trao bằng tốt nghiệp
                </h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    Sự hiện diện của mọi người là niềm vinh hạnh lớn lao cho mình và gia đình.
                </p>

                <div class="mt-6 flex flex-col gap-4 border-t border-gray-200 dark:border-gray-700 pt-6">
                    <!-- DATE -->
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                            <span class="material-symbols-outlined">calendar_month</span>
                        </div>
                        <div>
                            <p class="font-semibold text-text-light dark:text-white">Thứ Bảy, ngày 29 tháng 11 năm 2025</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">13h15 - 15h15</p>
                        </div>
                    </div>
                    <!-- LOCATION -->
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <p class="font-semibold text-text-light dark:text-white">
                                <a href="https://maps.app.goo.gl/degTQwxdHoDtWhzi7">
                                    Trường Đại Học Bách Khoa - Cơ sở 1
                                </a>        
                            </p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                <a href="https://maps.app.goo.gl/degTQwxdHoDtWhzi7">
                                    268 Lý Thường Kiệt, Phường Diên Hồng
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Section 4: Lời cảm ơn --}}
<section class="bg-gradient-to-b from-blue-50 via-cyan-50 to-white dark:bg-slate-900 py-16 md:py-24">
    <div class="w-full max-w-4xl mx-auto px-4 text-center">
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-xl p-8 md:p-12">
            <h3 class="text-3xl font-bold text-primary dark:text-white mb-6">Lời Tri Ân</h3>
            <p class="max-w-3xl mx-auto text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">Xin chân thành gửi lời cảm ơn sâu sắc đến gia đình, thầy cô và bạn bè đã luôn ở bên cạnh, động viên và hỗ trợ em trên suốt chặng đường 4 năm đại học. Thành quả hôm nay có được là nhờ sự yêu thương và giúp đỡ của tất cả mọi người.</p>
            <div class="border-t border-gray-200 dark:border-gray-700 w-1/4 mx-auto mb-8"></div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-4">Liên lạc với mình:</p>
                <div class="flex justify-center items-center gap-4">
                    <a class="flex items-center justify-center h-12 w-12 rounded-full bg-primary/10 hover:bg-primary/20 text-primary transition-colors" href="https://www.facebook.com/ka.pham.1410">
                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                   <a class="flex items-center justify-center h-12 w-12 rounded-full bg-primary/10 hover:bg-primary/20 text-primary transition-colors" href="tel:0392651410">
                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.88.76a1 1 0 011 1v3.5a1 1 0 01-1 1C10.07 21 3 13.93 3 5.5a1 1 0 011-1H7.5a1 1 0 011 1c0 1.35.27 2.67.76 3.88.1.25.04.54-.21 1.11l-2.43 2.3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>  
    </div>
</section>

    <!-- Image Preview Modal -->
    <div id="imagePreviewModal" 
        class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50">
        
        <div class="relative max-w-4xl w-full px-4">
            <!-- Close Button -->
            <button onclick="closePreview()"
                    class="absolute top-4 right-4 text-white text-3xl font-bold hover:text-gray-300">&times;</button>

            <!-- Image -->
            <img id="previewImage" 
                class="w-full h-auto rounded-lg shadow-xl object-contain"/>
        </div>
    </div>
@endsection
