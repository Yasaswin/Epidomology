<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('pageTitle') - {{ config('app.name') }}</title>

    @include('layouts.front.styles')

</head>
<body>
<!-- page header -->
<header class="only-color">
@include('layouts.front.header')
@include('layouts.front.navigation')
<div class="page-title">
			<div class="grid-row">
				<nav class="bread-crumb">
					<a href="index.html">About us</a>
					<i class="fa fa-long-arrow-right"></i>
					<a href="content-elements.html">History</a>
				</nav>
			</div>
		</div>

</header>
<!-- / page header -->
    <!-- page content -->
    <div class="page-content container clear-fix">
    <section class="fullwidth-background padding-section">
			<div class="grid-row">
				<h2 class="center-text">History</h2>
				<!-- time line -->
				<div class="time-line">
					<div class="line-element">
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-magnifier"></i></span>
								<div class="text">
									<p>ln 1959, after its establishment with the assistance of the WH0, the Epidemiology Unit was operated by a World Health 0rganization (WHO) public health consultant and a local Medical 0fficer qualified in public health. The latter was appointed formally in 1961 as the Epidemiologist. The Unit was housed along with the Public Health Veterinary Services and the Medical Statistics Unit at Chelsea Gardens, Colombo 03.</p>
								</div>
							</div>
						</div>
						<div class="level">
							<div class="level-block">1959</div>
						</div>
					</div>
					<div class="line-element color-2">
						<div class="level">
							<div class="level-block">1967</div>
						</div>
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-computer"></i></span>
								<div class="text">
									<p>ln 1967, two more assistant Epidemiologists trained in epidemiology were appointed to the Unit. By 1970 two peripheral health divisions, namely Kalutara and Kurunegala had their own Regional Epidemiologists.These officers have had their epidemiological training with the support of the WHO.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="line-element color-3">
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-shopping"></i></span>
								<div class="text">
									<p><br>The plan to appoint Regional Epidemiologists to all regional health divisions was hindered due to the scarcity of officers opting to remain in the field of public health. Those trained with the support of the WHO were appointed as Medical 0fficers of Health rather than Regional Epidemiologists. However, the next two regions covered by the services of Regional Epidemiologists were Jaffna and Vavuniya and thereafter, Kandy.<br>
                                    <br>Colombo region was served by an assistant Epidemiologist from the Epidemiology Unit. Another assistant Epidemiologist from the Unit was assigned for non-communicable disease epidemiolgy. This officer was later appointed as the first director of the Cancer Control Programme after its establishment as a separate unit within the Ministry of Health.<br>
                                    </p>
								</div>
							</div>
						</div>
						<div class="level">
							<div class="level-block">1967-1975</div>
						</div>
					</div>
                    <div class="line-element color-2">
						<div class="level">
							<div class="level-block">1975</div>
						</div>
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-computer"></i></span>
								<div class="text">
									<p>A public health bacteriologist with postgraduate qualifications in bacteriology as well as in public health was appointed to the Unit in 1975. This officer was attached to the lnfectious Diseases Hospital and the Lady Ridgeway Children's Hospital in Colombo, but worked as a member of the Epidemiology Unit team and was involved in outbreak investigations and in special epidemiological studies. However, this post was suppressed following the retirement of this officer in the early eighties.</p>
								</div>
							</div>
						</div>
					</div>
                    <div class="line-element">
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-magnifier"></i></span>
								<div class="text">
									<p>ln early 1970s, the Unit was shifted to the building that now houses the Ministry of Health. By February 1986, the Epidemiology Unit was relocated at the present building at 231, De Saram Place, Colombo 10, which also houses the Family Health Bureau.</p>
								</div>
							</div>
						</div>
						<div class="level">
							<div class="level-block">1986</div>
						</div>
					</div>
                    <div class="line-element color-2">
						<div class="level">
							<div class="level-block">1995</div>
						</div>
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-computer"></i></span>
								<div class="text">
									<p>ln 1995, the cadre allocated to the Unit was revised and the total number of Medical Officers was increased to 13. This number included two senior administrative grade officers and eight specialist grade officers. ln addition to this, it was planned to appoint Regional Epidemiologists to all Districts and Provincial Epidemiologists to the Provinces. All 26 RDHS divisions are now served by a Regional Epidemiologist.</p>
								</div>
							</div>
						</div>
					</div>
                    <div class="line-element">
						<div class="action">
							<div class="action-block">
								<span><i class="flaticon-magnifier"></i></span>
								<div class="text">
									<p>Over the years since 1959, the Unit has been steered by nine Chief Epidemiologists and at present, the Unit functions with a full cadre headed by the Chief Epidemiologist, Dr. Sudath Samaraweera.</p>
								</div>
							</div>
						</div>
						<div class="level">
							<div class="level-block">Sice 1959</div>
						</div>
					</div>

				</div>
				<!-- / time line -->
			</div>
		</section>
    </div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>