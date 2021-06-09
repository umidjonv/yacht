@extends('admin.layouts.mobile')



@section('content')
    <!-- gnb -->

    @if (!auth()->check())
        <script>window.location = "{{route('admin.mobile.login.index')}}";</script>
    @else

    <div class="jbg_grey4" style="position:relative; min-height:100%; padding-bottom:20px;">

		<!-- header -->
		<div class="jbg_header flx_side">
			<div class="flx_lft_m" style="width:90px; height:60px;">
				<div class="pdg_l05 tp_tab" onclick="location.href='javascript:history.go(-1);'">
					<svg width="32" height="20" viewBox="0 0 256 512">
						<path
							d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z">
						</path>
					</svg>
				</div>
			</div>
			<div class="flx_c jm_ts2 jcr_wht j_bold" style="height:60px;">
				상품관리
			</div>
			<div class="flx_rgt_m" style="width:90px; height:60px;">
			</div>
		</div>
		<!-- // header -->
		
		<!-- Section -->
        <div class="jbg_wht pdg_s20 pdg_tb15">
        	<!-- input -->
            <div class="w_100 flx_side_b">
                
				<div class="pdg_r10" style="width:calc(100% - 80px);">
					<div class="login_border flx_side_m">
						<div style="width:calc(100% - 30px);">
							<input class="w_100 js_input00" name="" placeholder="검색어를 입력하세요" type="text">
						</div>
						<div class="flx_c" style="height:43px; width:24px;">
							<img src="../resources/images/ic_search.png" height="24px" alt="" />
						</div>
					</div>
				</div>
                <div style="width:80px;">
                    <!-- button -->
                    <div class="flx_c jbg_btn01 jm_tsss2 jcr_wht j_bold j_rd04" style="height:43px" onclick="location.href='{{ route('admin.mobile.product.create') }}'">
                        등록
                    </div>
                    <!--// button -->
                </div>
            </div>
            <!-- // input -->
		</div>
		<!-- // Section -->
		
		<!-- Section -->
		<div class="pdg_s05 mgn_t20">
			
			<!-- List -->
			<!-- List_cell -->
			<div class="jbg_wht pdg_s15 pdg_t20 pdg_b20 mgn_b05 j_rd08">
				<div class="flx_side">
					<div style="width:calc(100% - 80px);">
						<div class="flx_lft_m">
							<!-- State -->
							<div class="bt_sml01">
								투어
							</div>
							<!--// State -->
							<div>
								<div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
									타이타닉
								</div>
							</div>
						</div>
						<div class="pdg_t10 flx_lft">
							<!-- thumbnail -->
							<div class="pdg_t03" style="width:84px;">
								<div class="thumb_02 flx_c">
									<img src="../resources/images/review_01.png" alt="" />
								</div>
							</div>
							<!-- // thumbnail -->
							<div class="pdg_l10">
								<div class="cut_2 mgn_b05 jm_tss2 j_bold">
									상품명이 노출되는 곳
								</div>
								<div class="jm_tss1 jcr_grey1">
									30인승, 40pt
								</div>
								<div class="jcr_red1 js_money">
									155,000
								</div>
							</div>
						</div>
					</div>
					<div class="flx_dn" style="margin-left:auto;">
						<!-- button -->
						<div class="mgn_b10 bt_sml02_blu2 js_btn_open" style="width:60px;">
							진열
						</div>
						<!--// button -->
						<!-- button -->
						<div class="mgn_b10 bt_sml02_wht" style="width:60px;" onclick="location.href='menu_03_regist.html'">
							수정
						</div>
						<!--// button -->
						<!-- button -->
						<div class="bt_sml02_blu" style="width:60px;">
							삭제
						</div>
						<!--// button -->
					</div>
				</div>
			</div>
			<!-- // List_cell -->
			<!-- List_cell -->
			<div class="jbg_wht pdg_s15 pdg_t20 pdg_b20 mgn_b05 j_rd08">
				<div class="flx_side">
					<div style="width:calc(100% - 80px);">
						<div class="flx_lft_m">
							<!-- State -->
							<div class="bt_sml01">
								투어
							</div>
							<!--// State -->
							<div>
								<div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
									퀸엘리자베스
								</div>
							</div>
						</div>
						<div class="pdg_t10 flx_lft">
							<!-- thumbnail -->
							<div class="pdg_t03" style="width:84px;">
								<div class="thumb_02 flx_c">
									<img src="../resources/images/review_01.png" alt="" />
								</div>
							</div>
							<!-- // thumbnail -->
							<div class="pdg_l10">
								<div class="cut_2 mgn_b05 jm_tss2 j_bold">
									상품명이 노출되는 곳
								</div>
								<div class="jm_tss1 jcr_grey1">
									30인승, 40pt
								</div>
								<div class="jcr_red1 js_money">
									155,000
								</div>
							</div>
						</div>
					</div>
					<div class="flx_dn" style="margin-left:auto;">
						<!-- button -->
						<div class="mgn_b10 bt_sml02_blu3 js_btn_open" style="width:60px;">
							진열
						</div>
						<!--// button -->
						<!-- button -->
						<div class="mgn_b10 bt_sml02_wht" style="width:60px;" onclick="location.href='menu_03_regist.html'">
							수정
						</div>
						<!--// button -->
						<!-- button -->
						<div class="bt_sml02_blu" style="width:60px;">
							삭제
						</div>
						<!--// button -->
					</div>
				</div>
			</div>
			<!-- // List_cell -->
			<!-- List_cell -->
			<div class="jbg_wht pdg_s15 pdg_t20 pdg_b20 mgn_b05 j_rd08">
				<div class="flx_side">
					<div style="width:calc(100% - 80px);">
						<div class="flx_lft_m">
							<!-- State -->
							<div class="bt_sml01">
								테마
							</div>
							<!--// State -->
							<div>
								<div class="pdg_l10 jm_tss3 jcr_grey1 j_bold">
									블루다이아몬드
								</div>
							</div>
						</div>
						<div class="pdg_t10 flx_lft">
							<!-- thumbnail -->
							<div class="pdg_t03" style="width:84px;">
								<div class="thumb_02 flx_c">
									<img src="../resources/images/review_01.png" alt="" />
								</div>
							</div>
							<!-- // thumbnail -->
							<div class="pdg_l10">
								<div class="cut_2 mgn_b05 jm_tss2 j_bold">
									상품명이 노출되는 곳
								</div>
								<div class="jm_tss1 jcr_grey1">
									30인승, 40pt
								</div>
								<div class="jcr_red1 js_money">
									155,000
								</div>
							</div>
						</div>
					</div>
					<div class="flx_dn" style="margin-left:auto;">
						<!-- button -->
						<div class="mgn_b10 bt_sml02_blu2 js_btn_open" style="width:60px;">
							진열
						</div>
						<!--// button -->
						<!-- button -->
						<div class="mgn_b10 bt_sml02_wht" style="width:60px;" onclick="location.href='menu_03_regist.html'">
							수정
						</div>
						<!--// button -->
						<!-- button -->
						<div class="bt_sml02_blu" style="width:60px;">
							삭제
						</div>
						<!--// button -->
					</div>
				</div>
			</div>
			<!-- // List_cell -->
			<!-- // List  -->
		</div>
		<!-- // Section -->



	</div>

    @endif



@endsection