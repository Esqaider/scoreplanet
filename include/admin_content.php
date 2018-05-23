
	<body class="menubar-left menubar-unfold menubar-light theme-primary">

<!-- APP NAVBAR ==========-->
<!-- APP MAIN ==========-->
<!-- APP ASIDE ==========-->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">


<div class="wrap">
	<section class="app-content">
		<div class="row">
		<!-- (Статус тура) DOM dataTable -->
              <div class="row">
                <div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix">
					<div class="pull-left">

		<h3 class="widget-title">Админ панель</h3>
         <a href="../index.php">вернуться на главную</a>
        
                  
					</div>
					<span class="pull-right fz-lg fw-500 counter">Следующий матч <span>15.05 19:00</span></span> 
                    </div>
				</div><!-- .widget -->
				
			  </div>
			  
		<!-- Программа тура -->
		
		<div class="row">
			<div class="col-md-8">
				<div class="widget">
					<div class="m-b-lg nav-tabs-horizontal">
						<!-- tabs list -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Турниры</a></li>
							<li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Пользователи</a></li>
							<li role="presentation"><a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Управление сайтом</a></li>
						</ul><!-- .nav-tabs -->

						<!-- Tab panels 1 -->
						<div class="tab-content p-md">
							<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
							
							<table class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name Tournament</th>
										<th>Next Match</th>
										<th>Status</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>CHL</td>
										<td>12.05</td>
										<td>Active</td>
										<td>Result</td>
										<td>Завершить</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Dreamteam</td>
										<td>18.05</td>
										<td>Active</td>
										<td>Result</td>
										<td>Завершить</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Name</td>
										<td>-</td>
										<td>No Active</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
							<p>
								
								<table class="table table-hover">
<tr align="center">
    <td>1</td>

    <td>15.04.2018<br>19:00</td>
    <td>
        <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px">
    </td>
    <td>
        <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px">
        <p></p><span>Мальмо</span></td>
    <td>
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px">
        <p></p><span>Фрелунда</span></td>
    <td class="im1">
        <div class="form-group">
            <input id="iScore1">
        </div>
    </td>

        <td class="im1">
            <div class="form-group">
                <input id="iScore2">
            </div>
        </td>
        <td class="im2">
            <button onclick="onClick()">calc</button>
            <div id="res"></div>

        </td>
        <td class="im2">
            <button onclick="runTests()">test</button>
        </td>
</tr>
<tr align="center">
    <td>1</td>

    <td>15.04.2018<br>19:00</td>
    <td>
        <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px">
    </td>
    <td>
        <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px">
        <p></p><span>Мальмо</span></td>
    <td>
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px">
        <p></p><span>Фрелунда</span></td>
    <td class="im1">
        <div class="form-group">
            <input id="iScore1">
        </div>
    </td>

        <td class="im1">
            <div class="form-group">
                <input id="iScore2">
            </div>
        </td>
        <td class="im2">
            <button onclick="onClick()">calc</button>
            <div id="res"></div>

        </td>
        <td class="im2">
            <button onclick="runTests()">test</button>
        </td>
</tr>

</table>
								    
								    
                  

    </div>
    <!-- END tab-pane 1 -->
    
    <!-- tab-pane 2 -->

    <div role="tabpanel" class="tab-pane fade" id="tab-2">
<!-- DOM dataTable -->
			
				
					
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name Tournament</th>
										<th>NextMatch</th>
										<th>Status</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Name Tournament</th>
										<th>NextMatch</th>
										<th>Status</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td>CHL</td>
										<td>12.05</td>
										<td>Active</td>
										<td>Result</td>
										<td>Завершить</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Dreamteam</td>
										<td>18.05</td>
										<td>Active</td>
										<td>Result</td>
										<td>Завершить</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Name</td>
										<td>-</td>
										<td>No Active</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
									</tr>
								</tbody>
							</table>
							
							<div id="DIV_1">
	<section id="SECTION_2">
		<header id="HEADER_3">
			<h1 id="H1_4">
				 <span id="SPAN_5">Schedule</span> 
				<select tabindex="-1" id="SELECT_6">
					 
					<option value="0" id="OPTION_7">
						2018/19
					</option> 
					<option value="1" id="OPTION_8">
						2017/18
					</option> 
					<option value="2" id="OPTION_9">
						2016/17
					</option> 
					<option value="3" id="OPTION_10">
						2015/16
					</option> 
					<option value="4" id="OPTION_11">
						2014/15
					</option>
				</select> <span id="SPAN_12"><span id="SPAN_13"><span id="SPAN_14"><span id="SPAN_15">2017/18</span><span id="SPAN_16"><b id="B_17"></b></span></span></span><span id="SPAN_18"></span></span>
			</h1>
		</header>
		<div id="DIV_19">
			<div id="DIV_20">
				<section id="SECTION_21">
					<div id="DIV_22">
						 <span id="SPAN_23">No schedule available</span>
					</div>
				</section>
				<script id="SCRIPT_24">corebine.import('markups/modules/sport/spec/hockey/schedule/schedule').then(function(module) {
                    module.ScheduleModule('#id-372661', {
                        baseFeedsUrl: 'http://www.championshockeyleague.com/api/s3?q=schedule-21ec9dad81abe2e0240460d0-3b8d1d7295522f7481d65ded.json',
                        liveFeedsUrl: 'http://www.championshockeyleague.com/api/s3/live?q=live-events.json',
                        season: '2018/19',
                        teamId: '',
                        pageContentEl: '.l-page-content',
                        chunkSize: 50,
                        queryMinInterval: 60000,
                        queryMaxInterval: 900000
                    });
                });
				</script>
			</div>
		</div>
		<div id="DIV_25">
				<div id="DIV_26">
					<section id="SECTION_27">
						<section id="SECTION_28">
							<header id="HEADER_29">
								<div id="DIV_31">
										<label id="LABEL_32">
										</label>
										<!-- react-text: 6 -->
All
										<!-- /react-text -->

										<input type="radio" name="period" value="value" id="INPUT_33" />
									</div>
									<div id="DIV_34">
										<label id="LABEL_35">
										</label>
										<!-- react-text: 10 -->
Upcoming games
										<!-- /react-text -->

										<input type="radio" name="period" value="value" id="INPUT_36" />
									</div>
									<div id="DIV_37">
										<label id="LABEL_38">
										</label>
										<!-- react-text: 14 -->
Recent games
										<!-- /react-text -->

										<input type="radio" name="period" value="value" id="INPUT_39" />
									</div>
									<div id="DIV_40">
										<span id="SPAN_41">Time range</span>
									</div>
									<div id="DIV_42">
										<select tabindex="-1" id="SELECT_43">
											<option id="OPTION_44">
											</option>
											<option value="9bd414328e8c2658731938a0" id="OPTION_45">
												Adler Mannheim
											</option>
											<option value="199734faffe3b90bf3ecccce" id="OPTION_46">
												Brynäs IF
											</option>
											<option value="865ec7e2959da256a2a97a8b" id="OPTION_47">
												Bílí Tygři Liberec
											</option>
											<option value="c9bf4fa7c19a869b63257232" id="OPTION_48">
												Cardiff Devils
											</option>
											<option value="3cdf75240ca3dc12459e879c" id="OPTION_49">
												Comarch Cracovia
											</option>
											<option value="4472b82fc7441fedc37b82e3" id="OPTION_50">
												EV Zug
											</option>
											<option value="be9ef52d3ac8aaa68001e2e6" id="OPTION_51">
												Esbjerg Energy
											</option>
											<option value="ba55abe823bed83d7c12e7b3" id="OPTION_52">
												Frölunda Indians
											</option>
											<option value="c641fe72a4abe82711785662" id="OPTION_53">
												Gap Rapaces
											</option>
											<option value="8b38615a6eed4a83cb3cbe77" id="OPTION_54">
												Grizzlys Wolfsburg
											</option>
											<option value="fc04d1152903083968962750" id="OPTION_55">
												HC Davos
											</option>
											<option value="868a87fa2a8ef7d4a04ebc8f" id="OPTION_56">
												HC05 Banská Bystrica
											</option>
											<option value="8b1dc0e6e12e79ab401aa775" id="OPTION_57">
												HV71 Jönköping
											</option>
											<option value="93818912cf42a68e900e7d08" id="OPTION_58">
												IFK Helsinki
											</option>
											<option value="ff84fb0e0bc9eebe4f5878ae" id="OPTION_59">
												JYP Jyväskylä
											</option>
											<option value="954f0696fef5e714282a6d75" id="OPTION_60">
												KAC Klagenfurt
											</option>
											<option value="d0017b49eaa2232d35e4939e" id="OPTION_61">
												KalPa Kuopio
											</option>
											<option value="70002ab8714596f91aa6a514" id="OPTION_62">
												Kometa Brno
											</option>
											<option value="d9faf64eaea21fb86ce70a49" id="OPTION_63">
												Malmö Redhawks
											</option>
											<option value="31ffb756ae0a30e567dcf226" id="OPTION_64">
												Mountfield HK
											</option>
											<option value="a9b6a968ed5120469a6af4b9" id="OPTION_65">
												Neman Grodno
											</option>
											<option value="5f68cd148ecad68095b3dc90" id="OPTION_66">
												Nottingham Panthers
											</option>
											<option value="73de29021fd0d8d2cfd204d2" id="OPTION_67">
												Oceláři Třinec
											</option>
											<option value="fe8fa9181f95038048c2a80d" id="OPTION_68">
												Red Bull Munich
											</option>
											<option value="aa8d051910780a557dc4a37f" id="OPTION_69">
												Red Bull Salzburg
											</option>
											<option value="d782924e733c817e5af717fd" id="OPTION_70">
												SC Bern
											</option>
											<option value="a18fffcd374ac47a8f6835d4" id="OPTION_71">
												Stavanger Oilers
											</option>
											<option value="225c7af9625921b18bebab78" id="OPTION_72">
												TPS Turku
											</option>
											<option value="6a0612c54317b473a6f67f56" id="OPTION_73">
												Tappara Tampere
											</option>
											<option value="cf3bd921c50ff37026e8a011" id="OPTION_74">
												Vienna Capitals
											</option>
											<option value="59b68db03ae141bf08f49775" id="OPTION_75">
												Växjö Lakers
											</option>
											<option value="b1dfe27dfb8fc9eb6ae5337a" id="OPTION_76">
												ZSC Lions Zurich
											</option>
										</select><span id="SPAN_77"><span id="SPAN_78"><span id="SPAN_79"><span id="SPAN_80"><span id="SPAN_81">By team</span></span><span id="SPAN_82"><b id="B_83"></b></span></span></span><span id="SPAN_84"></span></span>
									</div>
									<div id="DIV_85">
										<select tabindex="-1" id="SELECT_86">
											<option id="OPTION_87">
											</option>
											<option value="Group A" id="OPTION_88">
												Group A
											</option>
											<option value="Group B" id="OPTION_89">
												Group B
											</option>
											<option value="Group C" id="OPTION_90">
												Group C
											</option>
											<option value="Group D" id="OPTION_91">
												Group D
											</option>
											<option value="Group E" id="OPTION_92">
												Group E
											</option>
											<option value="Group F" id="OPTION_93">
												Group F
											</option>
											<option value="Group G" id="OPTION_94">
												Group G
											</option>
											<option value="Group H" id="OPTION_95">
												Group H
											</option>
											<option value="Round of 16" id="OPTION_96">
												Round of 16
											</option>
											<option value="Quarterfinals" id="OPTION_97">
												Quarterfinals
											</option>
											<option value="Semifinals" id="OPTION_98">
												Semifinals
											</option>
											<option value="Final" id="OPTION_99">
												Final
											</option>
										</select><span id="SPAN_100"><span id="SPAN_101"><span id="SPAN_102"><span id="SPAN_103"><span id="SPAN_104">By group</span></span><span id="SPAN_105"><b id="B_106"></b></span></span></span><span id="SPAN_107"></span></span>
									</div>
							</header>
							<article id="ARTICLE_108">
								<table id="TABLE_109">
									<thead id="THEAD_110">
										<tr id="TR_111">
											<th id="TH_112">
												<span id="SPAN_113">Date</span>
											</th>
											<th id="TH_114">
												<span id="SPAN_115">Stage</span>
											</th>
											<th id="TH_116">
												<span id="SPAN_117">Gameday</span>
											</th>
											<th id="TH_118">
												<div id="DIV_119">
													<span id="SPAN_120">Home</span><span id="SPAN_121">Away</span><span id="SPAN_122">Result</span>
												</div>
											</th>
											<th id="TH_123">
												<span id="SPAN_124">Venue</span>
											</th>
										</tr>
									</thead>
									<tbody id="TBODY_125">
										<tr id="TR_126">
											<td id="TD_127">
												<div id="DIV_128">
													<div id="DIV_129">
														24
													</div>
													<!-- react-text: 1503 -->

													<!-- /react-text -->

													<div id="DIV_130">
														Aug
													</div>
													<div id="DIV_131">
														18:00
													</div>
												</div>
											</td>
											<td id="TD_132">
												Group E
											</td>
											<td id="TD_133">
												Gameday 1
											</td>
											<td id="TD_134">
												<div id="DIV_135">
													<div id="DIV_136">
														<a href="//www.championshockeyleague.com/en/teams/865ec7e2959da256a2a97a8b/bili-tygri-liberec#" id="A_137"><span id="SPAN_138"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/3" alt="" id="IMG_139" /></span><span id="SPAN_140">Bílí Tygři Liberec</span></a>
													</div>
													<div id="DIV_141">
														<div id="DIV_142">
															<span id="SPAN_143">3</span><span id="SPAN_144">4</span>
														</div>
														<div id="DIV_145">
															<span id="SPAN_146">ot</span>
														</div>
													</div>
													<div id="DIV_147">
														<a href="//www.championshockeyleague.com/en/teams/59b68db03ae141bf08f49775/vaxjo-lakers#" id="A_148"><span id="SPAN_149"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/38" alt="" id="IMG_150" /></span><span id="SPAN_151">Växjö Lakers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_152">
												Home Credit Arena
											</td>
										</tr>
										<tr id="TR_153">
											<td id="TD_154">
												<div id="DIV_155">
													<div id="DIV_156">
														24
													</div>
													<!-- react-text: 1529 -->

													<!-- /react-text -->

													<div id="DIV_157">
														Aug
													</div>
													<div id="DIV_158">
														18:00
													</div>
												</div>
											</td>
											<td id="TD_159">
												Group F
											</td>
											<td id="TD_160">
												Gameday 1
											</td>
											<td id="TD_161">
												<div id="DIV_162">
													<div id="DIV_163">
														<a href="//www.championshockeyleague.com/en/teams/31ffb756ae0a30e567dcf226/mountfield-hk#" id="A_164"><span id="SPAN_165"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/72" alt="" id="IMG_166" /></span><span id="SPAN_167">Mountfield HK</span></a>
													</div>
													<div id="DIV_168">
														<div id="DIV_169">
															<span id="SPAN_170">5</span><span id="SPAN_171">1</span>
														</div>
													</div>
													<div id="DIV_172">
														<a href="//www.championshockeyleague.com/en/teams/225c7af9625921b18bebab78/tps-turku#" id="A_173"><span id="SPAN_174"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/28" alt="" id="IMG_175" /></span><span id="SPAN_176">TPS Turku</span></a>
													</div>
												</div>
											</td>
											<td id="TD_177">
												Arena Hradec Králové
											</td>
										</tr>
										<tr id="TR_178">
											<td id="TD_179">
												<div id="DIV_180">
													<div id="DIV_181">
														24
													</div>
													<!-- react-text: 1555 -->

													<!-- /react-text -->

													<div id="DIV_182">
														Aug
													</div>
													<div id="DIV_183">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_184">
												Group B
											</td>
											<td id="TD_185">
												Gameday 1
											</td>
											<td id="TD_186">
												<div id="DIV_187">
													<div id="DIV_188">
														<a href="//www.championshockeyleague.com/en/teams/d0017b49eaa2232d35e4939e/kal-pa-kuopio#" id="A_189"><span id="SPAN_190"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/25" alt="" id="IMG_191" /></span><span id="SPAN_192">KalPa Kuopio</span></a>
													</div>
													<div id="DIV_193">
														<div id="DIV_194">
															<span id="SPAN_195">6</span><span id="SPAN_196">4</span>
														</div>
													</div>
													<div id="DIV_197">
														<a href="//www.championshockeyleague.com/en/teams/d9faf64eaea21fb86ce70a49/malmo-redhawks#" id="A_198"><span id="SPAN_199"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/70" alt="" id="IMG_200" /></span><span id="SPAN_201">Malmö Redhawks</span></a>
													</div>
												</div>
											</td>
											<td id="TD_202">
												Niiralan Monttu
											</td>
										</tr>
										<tr id="TR_203">
											<td id="TD_204">
												<div id="DIV_205">
													<div id="DIV_206">
														24
													</div>
													<!-- react-text: 1583 -->

													<!-- /react-text -->

													<div id="DIV_207">
														Aug
													</div>
													<div id="DIV_208">
														19:30
													</div>
												</div>
											</td>
											<td id="TD_209">
												Group H
											</td>
											<td id="TD_210">
												Gameday 1
											</td>
											<td id="TD_211">
												<div id="DIV_212">
													<div id="DIV_213">
														<a href="//www.championshockeyleague.com/en/teams/ba55abe823bed83d7c12e7b3/frolunda-indians#" id="A_214"><span id="SPAN_215"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/31" alt="" id="IMG_216" /></span><span id="SPAN_217">Frölunda Indians</span></a>
													</div>
													<div id="DIV_218">
														<div id="DIV_219">
															<span id="SPAN_220">5</span><span id="SPAN_221">4</span>
														</div>
														<div id="DIV_222">
															<span id="SPAN_223">ot</span>
														</div>
													</div>
													<div id="DIV_224">
														<a href="//www.championshockeyleague.com/en/teams/b1dfe27dfb8fc9eb6ae5337a/zsc-lions-zurich#" id="A_225"><span id="SPAN_226"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/19" alt="" id="IMG_227" /></span><span id="SPAN_228">ZSC Lions Zurich</span></a>
													</div>
												</div>
											</td>
											<td id="TD_229">
												Frölundaborg
											</td>
										</tr>
										<tr id="TR_230">
											<td id="TD_231">
												<div id="DIV_232">
													<div id="DIV_233">
														24
													</div>
													<!-- react-text: 1609 -->

													<!-- /react-text -->

													<div id="DIV_234">
														Aug
													</div>
													<div id="DIV_235">
														19:30
													</div>
												</div>
											</td>
											<td id="TD_236">
												Group D
											</td>
											<td id="TD_237">
												Gameday 1
											</td>
											<td id="TD_238">
												<div id="DIV_239">
													<div id="DIV_240">
														<a href="//www.championshockeyleague.com/en/teams/8b1dc0e6e12e79ab401aa775/hv-71-jonkoping#" id="A_241"><span id="SPAN_242"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/33" alt="" id="IMG_243" /></span><span id="SPAN_244">HV71 Jönköping</span></a>
													</div>
													<div id="DIV_245">
														<div id="DIV_246">
															<span id="SPAN_247">1</span><span id="SPAN_248">4</span>
														</div>
													</div>
													<div id="DIV_249">
														<a href="//www.championshockeyleague.com/en/teams/9bd414328e8c2658731938a0/adler-mannheim#" id="A_250"><span id="SPAN_251"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/8" alt="" id="IMG_252" /></span><span id="SPAN_253">Adler Mannheim</span></a>
													</div>
												</div>
											</td>
											<td id="TD_254">
												Kinnarps Arena
											</td>
										</tr>
										<tr id="TR_255">
											<td id="TD_256">
												<div id="DIV_257">
													<div id="DIV_258">
														24
													</div>
													<!-- react-text: 1635 -->

													<!-- /react-text -->

													<div id="DIV_259">
														Aug
													</div>
													<div id="DIV_260">
														20:30
													</div>
												</div>
											</td>
											<td id="TD_261">
												Group B
											</td>
											<td id="TD_262">
												Gameday 1
											</td>
											<td id="TD_263">
												<div id="DIV_264">
													<div id="DIV_265">
														<a href="//www.championshockeyleague.com/en/teams/a18fffcd374ac47a8f6835d4/stavanger-oilers#" id="A_266"><span id="SPAN_267"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/40" alt="" id="IMG_268" /></span><span id="SPAN_269">Stavanger Oilers</span></a>
													</div>
													<div id="DIV_270">
														<div id="DIV_271">
															<span id="SPAN_272">1</span><span id="SPAN_273">2</span>
														</div>
													</div>
													<div id="DIV_274">
														<a href="//www.championshockeyleague.com/en/teams/70002ab8714596f91aa6a514/kometa-brno#" id="A_275"><span id="SPAN_276"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/71" alt="" id="IMG_277" /></span><span id="SPAN_278">Kometa Brno</span></a>
													</div>
												</div>
											</td>
											<td id="TD_279">
												DNB Arena
											</td>
										</tr>
										<tr id="TR_280">
											<td id="TD_281">
												<div id="DIV_282">
													<div id="DIV_283">
														24
													</div>
													<!-- react-text: 1663 -->

													<!-- /react-text -->

													<div id="DIV_284">
														Aug
													</div>
													<div id="DIV_285">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_286">
												Group E
											</td>
											<td id="TD_287">
												Gameday 1
											</td>
											<td id="TD_288">
												<div id="DIV_289">
													<div id="DIV_290">
														<a href="//www.championshockeyleague.com/en/teams/fc04d1152903083968962750/hc-davos#" id="A_291"><span id="SPAN_292"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/47" alt="" id="IMG_293" /></span><span id="SPAN_294">HC Davos</span></a>
													</div>
													<div id="DIV_295">
														<div id="DIV_296">
															<span id="SPAN_297">10</span><span id="SPAN_298">1</span>
														</div>
													</div>
													<div id="DIV_299">
														<a href="//www.championshockeyleague.com/en/teams/c9bf4fa7c19a869b63257232/cardiff-devils#" id="A_300"><span id="SPAN_301"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/73" alt="" id="IMG_302" /></span><span id="SPAN_303">Cardiff Devils</span></a>
													</div>
												</div>
											</td>
											<td id="TD_304">
												Vaillant Arena
											</td>
										</tr>
										<tr id="TR_305">
											<td id="TD_306">
												<div id="DIV_307">
													<div id="DIV_308">
														24
													</div>
													<!-- react-text: 1689 -->

													<!-- /react-text -->

													<div id="DIV_309">
														Aug
													</div>
													<div id="DIV_310">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_311">
												Group F
											</td>
											<td id="TD_312">
												Gameday 1
											</td>
											<td id="TD_313">
												<div id="DIV_314">
													<div id="DIV_315">
														<a href="//www.championshockeyleague.com/en/teams/d782924e733c817e5af717fd/sc-bern#" id="A_316"><span id="SPAN_317"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/17" alt="" id="IMG_318" /></span><span id="SPAN_319">SC Bern</span></a>
													</div>
													<div id="DIV_320">
														<div id="DIV_321">
															<span id="SPAN_322">5</span><span id="SPAN_323">2</span>
														</div>
													</div>
													<div id="DIV_324">
														<a href="//www.championshockeyleague.com/en/teams/5f68cd148ecad68095b3dc90/nottingham-panthers#" id="A_325"><span id="SPAN_326"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/39" alt="" id="IMG_327" /></span><span id="SPAN_328">Nottingham Panthers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_329">
												PostFinance Arena
											</td>
										</tr>
										<tr id="TR_330">
											<td id="TD_331">
												<div id="DIV_332">
													<div id="DIV_333">
														24
													</div>
													<!-- react-text: 2818 -->

													<!-- /react-text -->

													<div id="DIV_334">
														Aug
													</div>
													<div id="DIV_335">
														21:30
													</div>
												</div>
											</td>
											<td id="TD_336">
												Group H
											</td>
											<td id="TD_337">
												Gameday 1
											</td>
											<td id="TD_338">
												<div id="DIV_339">
													<div id="DIV_340">
														<a href="//www.championshockeyleague.com/en/teams/c641fe72a4abe82711785662/gap-rapaces#" id="A_341"><span id="SPAN_342"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/56" alt="" id="IMG_343" /></span><span id="SPAN_344">Gap Rapaces</span></a>
													</div>
													<div id="DIV_345">
														<div id="DIV_346">
															<span id="SPAN_347">3</span><span id="SPAN_348">6</span>
														</div>
													</div>
													<div id="DIV_349">
														<a href="//www.championshockeyleague.com/en/teams/954f0696fef5e714282a6d75/kac-klagenfurt#" id="A_350"><span id="SPAN_351"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/51" alt="" id="IMG_352" /></span><span id="SPAN_353">KAC Klagenfurt</span></a>
													</div>
												</div>
											</td>
											<td id="TD_354">
												Alp'Arena
											</td>
										</tr>
										<tr id="TR_355">
											<td id="TD_356">
												<div id="DIV_357">
													<div id="DIV_358">
														25
													</div>
													<!-- react-text: 2844 -->

													<!-- /react-text -->

													<div id="DIV_359">
														Aug
													</div>
													<div id="DIV_360">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_361">
												Group A
											</td>
											<td id="TD_362">
												Gameday 1
											</td>
											<td id="TD_363">
												<div id="DIV_364">
													<div id="DIV_365">
														<a href="//www.championshockeyleague.com/en/teams/8b38615a6eed4a83cb3cbe77/grizzlys-wolfsburg#" id="A_366"><span id="SPAN_367"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/67" alt="" id="IMG_368" /></span><span id="SPAN_369">Grizzlys Wolfsburg</span></a>
													</div>
													<div id="DIV_370">
														<div id="DIV_371">
															<span id="SPAN_372">4</span><span id="SPAN_373">3</span>
														</div>
													</div>
													<div id="DIV_374">
														<a href="//www.championshockeyleague.com/en/teams/868a87fa2a8ef7d4a04ebc8f/hc-05-banska-bystrica#" id="A_375"><span id="SPAN_376"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/74" alt="" id="IMG_377" /></span><span id="SPAN_378">HC05 Banská Bystrica</span></a>
													</div>
												</div>
											</td>
											<td id="TD_379">
												Eis Arena Wolfsburg
											</td>
										</tr>
										<tr id="TR_380">
											<td id="TD_381">
												<div id="DIV_382">
													<div id="DIV_383">
														25
													</div>
													<!-- react-text: 2870 -->

													<!-- /react-text -->

													<div id="DIV_384">
														Aug
													</div>
													<div id="DIV_385">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_386">
												Group D
											</td>
											<td id="TD_387">
												Gameday 1
											</td>
											<td id="TD_388">
												<div id="DIV_389">
													<div id="DIV_390">
														<a href="//www.championshockeyleague.com/en/teams/73de29021fd0d8d2cfd204d2/ocelari-trinec#" id="A_391"><span id="SPAN_392"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/6" alt="" id="IMG_393" /></span><span id="SPAN_394">Oceláři Třinec</span></a>
													</div>
													<div id="DIV_395">
														<div id="DIV_396">
															<span id="SPAN_397">9</span><span id="SPAN_398">1</span>
														</div>
													</div>
													<div id="DIV_399">
														<a href="//www.championshockeyleague.com/en/teams/be9ef52d3ac8aaa68001e2e6/esbjerg-energy#" id="A_400"><span id="SPAN_401"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/60" alt="" id="IMG_402" /></span><span id="SPAN_403">Esbjerg Energy</span></a>
													</div>
												</div>
											</td>
											<td id="TD_404">
												Werk Arena
											</td>
										</tr>
										<tr id="TR_405">
											<td id="TD_406">
												<div id="DIV_407">
													<div id="DIV_408">
														25
													</div>
													<!-- react-text: 2896 -->

													<!-- /react-text -->

													<div id="DIV_409">
														Aug
													</div>
													<div id="DIV_410">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_411">
												Group C
											</td>
											<td id="TD_412">
												Gameday 1
											</td>
											<td id="TD_413">
												<div id="DIV_414">
													<div id="DIV_415">
														<a href="//www.championshockeyleague.com/en/teams/a9b6a968ed5120469a6af4b9/neman-grodno#" id="A_416"><span id="SPAN_417"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/58" alt="" id="IMG_418" /></span><span id="SPAN_419">Neman Grodno</span></a>
													</div>
													<div id="DIV_420">
														<div id="DIV_421">
															<span id="SPAN_422">5</span><span id="SPAN_423">4</span>
														</div>
														<div id="DIV_424">
															<span id="SPAN_425">ot</span>
														</div>
													</div>
													<div id="DIV_426">
														<a href="//www.championshockeyleague.com/en/teams/cf3bd921c50ff37026e8a011/vienna-capitals#" id="A_427"><span id="SPAN_428"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/14" alt="" id="IMG_429" /></span><span id="SPAN_430">Vienna Capitals</span></a>
													</div>
												</div>
											</td>
											<td id="TD_431">
												Grodno Ice Sports Palace
											</td>
										</tr>
										<tr id="TR_432">
											<td id="TD_433">
												<div id="DIV_434">
													<div id="DIV_435">
														25
													</div>
													<!-- react-text: 2926 -->

													<!-- /react-text -->

													<div id="DIV_436">
														Aug
													</div>
													<div id="DIV_437">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_438">
												Group C
											</td>
											<td id="TD_439">
												Gameday 1
											</td>
											<td id="TD_440">
												<div id="DIV_441">
													<div id="DIV_442">
														<a href="//www.championshockeyleague.com/en/teams/ff84fb0e0bc9eebe4f5878ae/jyp-jyvaskyla#" id="A_443"><span id="SPAN_444"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/24" alt="" id="IMG_445" /></span><span id="SPAN_446">JYP Jyväskylä</span></a>
													</div>
													<div id="DIV_447">
														<div id="DIV_448">
															<span id="SPAN_449">3</span><span id="SPAN_450">2</span>
														</div>
													</div>
													<div id="DIV_451">
														<a href="//www.championshockeyleague.com/en/teams/4472b82fc7441fedc37b82e3/ev-zug#" id="A_452"><span id="SPAN_453"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/20" alt="" id="IMG_454" /></span><span id="SPAN_455">EV Zug</span></a>
													</div>
												</div>
											</td>
											<td id="TD_456">
												LähiTapiola Areena
											</td>
										</tr>
										<tr id="TR_457">
											<td id="TD_458">
												<div id="DIV_459">
													<div id="DIV_460">
														25
													</div>
													<!-- react-text: 2952 -->

													<!-- /react-text -->

													<div id="DIV_461">
														Aug
													</div>
													<div id="DIV_462">
														20:00
													</div>
												</div>
											</td>
											<td id="TD_463">
												Group G
											</td>
											<td id="TD_464">
												Gameday 1
											</td>
											<td id="TD_465">
												<div id="DIV_466">
													<div id="DIV_467">
														<a href="//www.championshockeyleague.com/en/teams/fe8fa9181f95038048c2a80d/red-bull-munich#" id="A_468"><span id="SPAN_469"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/48" alt="" id="IMG_470" /></span><span id="SPAN_471">Red Bull Munich</span></a>
													</div>
													<div id="DIV_472">
														<div id="DIV_473">
															<span id="SPAN_474">6</span><span id="SPAN_475">2</span>
														</div>
													</div>
													<div id="DIV_476">
														<a href="//www.championshockeyleague.com/en/teams/3cdf75240ca3dc12459e879c/comarch-cracovia#" id="A_477"><span id="SPAN_478"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/63" alt="" id="IMG_479" /></span><span id="SPAN_480">Comarch Cracovia</span></a>
													</div>
												</div>
											</td>
											<td id="TD_481">
												Olympia-Eisstadion
											</td>
										</tr>
										<tr id="TR_482">
											<td id="TD_483">
												<div id="DIV_484">
													<div id="DIV_485">
														25
													</div>
													<!-- react-text: 2978 -->

													<!-- /react-text -->

													<div id="DIV_486">
														Aug
													</div>
													<div id="DIV_487">
														20:00
													</div>
												</div>
											</td>
											<td id="TD_488">
												Group A
											</td>
											<td id="TD_489">
												Gameday 1
											</td>
											<td id="TD_490">
												<div id="DIV_491">
													<div id="DIV_492">
														<a href="//www.championshockeyleague.com/en/teams/aa8d051910780a557dc4a37f/red-bull-salzburg#" id="A_493"><span id="SPAN_494"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/13" alt="" id="IMG_495" /></span><span id="SPAN_496">Red Bull Salzburg</span></a>
													</div>
													<div id="DIV_497">
														<div id="DIV_498">
															<span id="SPAN_499">1</span><span id="SPAN_500">6</span>
														</div>
													</div>
													<div id="DIV_501">
														<a href="//www.championshockeyleague.com/en/teams/6a0612c54317b473a6f67f56/tappara-tampere#" id="A_502"><span id="SPAN_503"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/27" alt="" id="IMG_504" /></span><span id="SPAN_505">Tappara Tampere</span></a>
													</div>
												</div>
											</td>
											<td id="TD_506">
												Eisarena Salzburg
											</td>
										</tr>
										<tr id="TR_507">
											<td id="TD_508">
												<div id="DIV_509">
													<div id="DIV_510">
														25
													</div>
													<!-- react-text: 3004 -->

													<!-- /react-text -->

													<div id="DIV_511">
														Aug
													</div>
													<div id="DIV_512">
														20:00
													</div>
												</div>
											</td>
											<td id="TD_513">
												Group G
											</td>
											<td id="TD_514">
												Gameday 1
											</td>
											<td id="TD_515">
												<div id="DIV_516">
													<div id="DIV_517">
														<a href="//www.championshockeyleague.com/en/teams/199734faffe3b90bf3ecccce/brynas-if#" id="A_518"><span id="SPAN_519"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/69" alt="" id="IMG_520" /></span><span id="SPAN_521">Brynäs IF</span></a>
													</div>
													<div id="DIV_522">
														<div id="DIV_523">
															<span id="SPAN_524">4</span><span id="SPAN_525">3</span>
														</div>
														<div id="DIV_526">
															<span id="SPAN_527">so</span>
														</div>
													</div>
													<div id="DIV_528">
														<a href="//www.championshockeyleague.com/en/teams/93818912cf42a68e900e7d08/ifk-helsinki#" id="A_529"><span id="SPAN_530"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/23" alt="" id="IMG_531" /></span><span id="SPAN_532">IFK Helsinki</span></a>
													</div>
												</div>
											</td>
											<td id="TD_533">
												Gavlerinken Arena
											</td>
										</tr>
										<tr id="TR_534">
											<td id="TD_535">
												<div id="DIV_536">
													<div id="DIV_537">
														26
													</div>
													<!-- react-text: 3032 -->

													<!-- /react-text -->

													<div id="DIV_538">
														Aug
													</div>
													<div id="DIV_539">
														16:00
													</div>
												</div>
											</td>
											<td id="TD_540">
												Group H
											</td>
											<td id="TD_541">
												Gameday 2
											</td>
											<td id="TD_542">
												<div id="DIV_543">
													<div id="DIV_544">
														<a href="//www.championshockeyleague.com/en/teams/ba55abe823bed83d7c12e7b3/frolunda-indians#" id="A_545"><span id="SPAN_546"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/31" alt="" id="IMG_547" /></span><span id="SPAN_548">Frölunda Indians</span></a>
													</div>
													<div id="DIV_549">
														<div id="DIV_550">
															<span id="SPAN_551">2</span><span id="SPAN_552">1</span>
														</div>
													</div>
													<div id="DIV_553">
														<a href="//www.championshockeyleague.com/en/teams/954f0696fef5e714282a6d75/kac-klagenfurt#" id="A_554"><span id="SPAN_555"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/51" alt="" id="IMG_556" /></span><span id="SPAN_557">KAC Klagenfurt</span></a>
													</div>
												</div>
											</td>
											<td id="TD_558">
												Frölundaborg
											</td>
										</tr>
										<tr id="TR_559">
											<td id="TD_560">
												<div id="DIV_561">
													<div id="DIV_562">
														26
													</div>
													<!-- react-text: 3058 -->

													<!-- /react-text -->

													<div id="DIV_563">
														Aug
													</div>
													<div id="DIV_564">
														16:00
													</div>
												</div>
											</td>
											<td id="TD_565">
												Group H
											</td>
											<td id="TD_566">
												Gameday 2
											</td>
											<td id="TD_567">
												<div id="DIV_568">
													<div id="DIV_569">
														<a href="//www.championshockeyleague.com/en/teams/c641fe72a4abe82711785662/gap-rapaces#" id="A_570"><span id="SPAN_571"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/56" alt="" id="IMG_572" /></span><span id="SPAN_573">Gap Rapaces</span></a>
													</div>
													<div id="DIV_574">
														<div id="DIV_575">
															<span id="SPAN_576">1</span><span id="SPAN_577">11</span>
														</div>
													</div>
													<div id="DIV_578">
														<a href="//www.championshockeyleague.com/en/teams/b1dfe27dfb8fc9eb6ae5337a/zsc-lions-zurich#" id="A_579"><span id="SPAN_580"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/19" alt="" id="IMG_581" /></span><span id="SPAN_582">ZSC Lions Zurich</span></a>
													</div>
												</div>
											</td>
											<td id="TD_583">
												Alp'Arena
											</td>
										</tr>
										<tr id="TR_584">
											<td id="TD_585">
												<div id="DIV_586">
													<div id="DIV_587">
														26
													</div>
													<!-- react-text: 3084 -->

													<!-- /react-text -->

													<div id="DIV_588">
														Aug
													</div>
													<div id="DIV_589">
														16:30
													</div>
												</div>
											</td>
											<td id="TD_590">
												Group E
											</td>
											<td id="TD_591">
												Gameday 2
											</td>
											<td id="TD_592">
												<div id="DIV_593">
													<div id="DIV_594">
														<a href="//www.championshockeyleague.com/en/teams/865ec7e2959da256a2a97a8b/bili-tygri-liberec#" id="A_595"><span id="SPAN_596"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/3" alt="" id="IMG_597" /></span><span id="SPAN_598">Bílí Tygři Liberec</span></a>
													</div>
													<div id="DIV_599">
														<div id="DIV_600">
															<span id="SPAN_601">5</span><span id="SPAN_602">2</span>
														</div>
													</div>
													<div id="DIV_603">
														<a href="//www.championshockeyleague.com/en/teams/c9bf4fa7c19a869b63257232/cardiff-devils#" id="A_604"><span id="SPAN_605"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/73" alt="" id="IMG_606" /></span><span id="SPAN_607">Cardiff Devils</span></a>
													</div>
												</div>
											</td>
											<td id="TD_608">
												Home Credit Arena
											</td>
										</tr>
										<tr id="TR_609">
											<td id="TD_610">
												<div id="DIV_611">
													<div id="DIV_612">
														26
													</div>
													<!-- react-text: 3110 -->

													<!-- /react-text -->

													<div id="DIV_613">
														Aug
													</div>
													<div id="DIV_614">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_615">
												Group B
											</td>
											<td id="TD_616">
												Gameday 2
											</td>
											<td id="TD_617">
												<div id="DIV_618">
													<div id="DIV_619">
														<a href="//www.championshockeyleague.com/en/teams/d0017b49eaa2232d35e4939e/kal-pa-kuopio#" id="A_620"><span id="SPAN_621"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/25" alt="" id="IMG_622" /></span><span id="SPAN_623">KalPa Kuopio</span></a>
													</div>
													<div id="DIV_624">
														<div id="DIV_625">
															<span id="SPAN_626">2</span><span id="SPAN_627">4</span>
														</div>
													</div>
													<div id="DIV_628">
														<a href="//www.championshockeyleague.com/en/teams/70002ab8714596f91aa6a514/kometa-brno#" id="A_629"><span id="SPAN_630"><img src="http://res.cloudinary.com/chl-production/image/upload/c_fit,dpr_1.0,f_auto,g_center,h_40,q_auto,w_40/v1/chl-prod/assets/teams/71" alt="" id="IMG_631" /></span><span id="SPAN_632">Kometa Brno</span></a>
													</div>
												</div>
											</td>
											<td id="TD_633">
												Niiralan Monttu
											</td>
										</tr>
										<tr id="TR_634">
											<td id="TD_635">
												<div id="DIV_636">
													<div id="DIV_637">
														26
													</div>
													<!-- react-text: 3136 -->

													<!-- /react-text -->

													<div id="DIV_638">
														Aug
													</div>
													<div id="DIV_639">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_640">
												Group F
											</td>
											<td id="TD_641">
												Gameday 2
											</td>
											<td id="TD_642">
												<div id="DIV_643">
													<div id="DIV_644">
														<a href="//www.championshockeyleague.com/en/teams/31ffb756ae0a30e567dcf226/mountfield-hk#" id="A_645"><span id="SPAN_646"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_647" /></span><span id="SPAN_648">Mountfield HK</span></a>
													</div>
													<div id="DIV_649">
														<div id="DIV_650">
															<span id="SPAN_651">2</span><span id="SPAN_652">4</span>
														</div>
													</div>
													<div id="DIV_653">
														<a href="//www.championshockeyleague.com/en/teams/5f68cd148ecad68095b3dc90/nottingham-panthers#" id="A_654"><span id="SPAN_655"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_656" /></span><span id="SPAN_657">Nottingham Panthers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_658">
												Arena Hradec Králové
											</td>
										</tr>
										<tr id="TR_659">
											<td id="TD_660">
												<div id="DIV_661">
													<div id="DIV_662">
														26
													</div>
													<!-- react-text: 3162 -->

													<!-- /react-text -->

													<div id="DIV_663">
														Aug
													</div>
													<div id="DIV_664">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_665">
												Group B
											</td>
											<td id="TD_666">
												Gameday 2
											</td>
											<td id="TD_667">
												<div id="DIV_668">
													<div id="DIV_669">
														<a href="//www.championshockeyleague.com/en/teams/a18fffcd374ac47a8f6835d4/stavanger-oilers#" id="A_670"><span id="SPAN_671"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_672" /></span><span id="SPAN_673">Stavanger Oilers</span></a>
													</div>
													<div id="DIV_674">
														<div id="DIV_675">
															<span id="SPAN_676">3</span><span id="SPAN_677">4</span>
														</div>
													</div>
													<div id="DIV_678">
														<a href="//www.championshockeyleague.com/en/teams/d9faf64eaea21fb86ce70a49/malmo-redhawks#" id="A_679"><span id="SPAN_680"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_681" /></span><span id="SPAN_682">Malmö Redhawks</span></a>
													</div>
												</div>
											</td>
											<td id="TD_683">
												DNB Arena
											</td>
										</tr>
										<tr id="TR_684">
											<td id="TD_685">
												<div id="DIV_686">
													<div id="DIV_687">
														26
													</div>
													<!-- react-text: 3188 -->

													<!-- /react-text -->

													<div id="DIV_688">
														Aug
													</div>
													<div id="DIV_689">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_690">
												Group E
											</td>
											<td id="TD_691">
												Gameday 2
											</td>
											<td id="TD_692">
												<div id="DIV_693">
													<div id="DIV_694">
														<a href="//www.championshockeyleague.com/en/teams/fc04d1152903083968962750/hc-davos#" id="A_695"><span id="SPAN_696"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_697" /></span><span id="SPAN_698">HC Davos</span></a>
													</div>
													<div id="DIV_699">
														<div id="DIV_700">
															<span id="SPAN_701">0</span><span id="SPAN_702">3</span>
														</div>
													</div>
													<div id="DIV_703">
														<a href="//www.championshockeyleague.com/en/teams/59b68db03ae141bf08f49775/vaxjo-lakers#" id="A_704"><span id="SPAN_705"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_706" /></span><span id="SPAN_707">Växjö Lakers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_708">
												Vaillant Arena
											</td>
										</tr>
										<tr id="TR_709">
											<td id="TD_710">
												<div id="DIV_711">
													<div id="DIV_712">
														26
													</div>
													<!-- react-text: 3214 -->

													<!-- /react-text -->

													<div id="DIV_713">
														Aug
													</div>
													<div id="DIV_714">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_715">
												Group F
											</td>
											<td id="TD_716">
												Gameday 2
											</td>
											<td id="TD_717">
												<div id="DIV_718">
													<div id="DIV_719">
														<a href="//www.championshockeyleague.com/en/teams/d782924e733c817e5af717fd/sc-bern#" id="A_720"><span id="SPAN_721"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_722" /></span><span id="SPAN_723">SC Bern</span></a>
													</div>
													<div id="DIV_724">
														<div id="DIV_725">
															<span id="SPAN_726">4</span><span id="SPAN_727">0</span>
														</div>
													</div>
													<div id="DIV_728">
														<a href="//www.championshockeyleague.com/en/teams/225c7af9625921b18bebab78/tps-turku#" id="A_729"><span id="SPAN_730"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_731" /></span><span id="SPAN_732">TPS Turku</span></a>
													</div>
												</div>
											</td>
											<td id="TD_733">
												PostFinance Arena
											</td>
										</tr>
										<tr id="TR_734">
											<td id="TD_735">
												<div id="DIV_736">
													<div id="DIV_737">
														27
													</div>
													<!-- react-text: 3240 -->

													<!-- /react-text -->

													<div id="DIV_738">
														Aug
													</div>
													<div id="DIV_739">
														15:00
													</div>
												</div>
											</td>
											<td id="TD_740">
												Group D
											</td>
											<td id="TD_741">
												Gameday 2
											</td>
											<td id="TD_742">
												<div id="DIV_743">
													<div id="DIV_744">
														<a href="//www.championshockeyleague.com/en/teams/73de29021fd0d8d2cfd204d2/ocelari-trinec#" id="A_745"><span id="SPAN_746"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_747" /></span><span id="SPAN_748">Oceláři Třinec</span></a>
													</div>
													<div id="DIV_749">
														<div id="DIV_750">
															<span id="SPAN_751">3</span><span id="SPAN_752">0</span>
														</div>
													</div>
													<div id="DIV_753">
														<a href="//www.championshockeyleague.com/en/teams/9bd414328e8c2658731938a0/adler-mannheim#" id="A_754"><span id="SPAN_755"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_756" /></span><span id="SPAN_757">Adler Mannheim</span></a>
													</div>
												</div>
											</td>
											<td id="TD_758">
												Werk Arena
											</td>
										</tr>
										<tr id="TR_759">
											<td id="TD_760">
												<div id="DIV_761">
													<div id="DIV_762">
														27
													</div>
													<!-- react-text: 3266 -->

													<!-- /react-text -->

													<div id="DIV_763">
														Aug
													</div>
													<div id="DIV_764">
														15:30
													</div>
												</div>
											</td>
											<td id="TD_765">
												Group G
											</td>
											<td id="TD_766">
												Gameday 2
											</td>
											<td id="TD_767">
												<div id="DIV_768">
													<div id="DIV_769">
														<a href="//www.championshockeyleague.com/en/teams/199734faffe3b90bf3ecccce/brynas-if#" id="A_770"><span id="SPAN_771"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_772" /></span><span id="SPAN_773">Brynäs IF</span></a>
													</div>
													<div id="DIV_774">
														<div id="DIV_775">
															<span id="SPAN_776">8</span><span id="SPAN_777">0</span>
														</div>
													</div>
													<div id="DIV_778">
														<a href="//www.championshockeyleague.com/en/teams/3cdf75240ca3dc12459e879c/comarch-cracovia#" id="A_779"><span id="SPAN_780"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_781" /></span><span id="SPAN_782">Comarch Cracovia</span></a>
													</div>
												</div>
											</td>
											<td id="TD_783">
												Gavlerinken Arena
											</td>
										</tr>
										<tr id="TR_784">
											<td id="TD_785">
												<div id="DIV_786">
													<div id="DIV_787">
														27
													</div>
													<!-- react-text: 3292 -->

													<!-- /react-text -->

													<div id="DIV_788">
														Aug
													</div>
													<div id="DIV_789">
														15:30
													</div>
												</div>
											</td>
											<td id="TD_790">
												Group D
											</td>
											<td id="TD_791">
												Gameday 2
											</td>
											<td id="TD_792">
												<div id="DIV_793">
													<div id="DIV_794">
														<a href="//www.championshockeyleague.com/en/teams/8b1dc0e6e12e79ab401aa775/hv-71-jonkoping#" id="A_795"><span id="SPAN_796"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_797" /></span><span id="SPAN_798">HV71 Jönköping</span></a>
													</div>
													<div id="DIV_799">
														<div id="DIV_800">
															<span id="SPAN_801">3</span><span id="SPAN_802">0</span>
														</div>
													</div>
													<div id="DIV_803">
														<a href="//www.championshockeyleague.com/en/teams/be9ef52d3ac8aaa68001e2e6/esbjerg-energy#" id="A_804"><span id="SPAN_805"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_806" /></span><span id="SPAN_807">Esbjerg Energy</span></a>
													</div>
												</div>
											</td>
											<td id="TD_808">
												Kinnarps Arena
											</td>
										</tr>
										<tr id="TR_809">
											<td id="TD_810">
												<div id="DIV_811">
													<div id="DIV_812">
														27
													</div>
													<!-- react-text: 3318 -->

													<!-- /react-text -->

													<div id="DIV_813">
														Aug
													</div>
													<div id="DIV_814">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_815">
												Group A
											</td>
											<td id="TD_816">
												Gameday 2
											</td>
											<td id="TD_817">
												<div id="DIV_818">
													<div id="DIV_819">
														<a href="//www.championshockeyleague.com/en/teams/8b38615a6eed4a83cb3cbe77/grizzlys-wolfsburg#" id="A_820"><span id="SPAN_821"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_822" /></span><span id="SPAN_823">Grizzlys Wolfsburg</span></a>
													</div>
													<div id="DIV_824">
														<div id="DIV_825">
															<span id="SPAN_826">1</span><span id="SPAN_827">7</span>
														</div>
													</div>
													<div id="DIV_828">
														<a href="//www.championshockeyleague.com/en/teams/6a0612c54317b473a6f67f56/tappara-tampere#" id="A_829"><span id="SPAN_830"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_831" /></span><span id="SPAN_832">Tappara Tampere</span></a>
													</div>
												</div>
											</td>
											<td id="TD_833">
												Eis Arena Wolfsburg
											</td>
										</tr>
										<tr id="TR_834">
											<td id="TD_835">
												<div id="DIV_836">
													<div id="DIV_837">
														27
													</div>
													<!-- react-text: 3344 -->

													<!-- /react-text -->

													<div id="DIV_838">
														Aug
													</div>
													<div id="DIV_839">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_840">
												Group C
											</td>
											<td id="TD_841">
												Gameday 2
											</td>
											<td id="TD_842">
												<div id="DIV_843">
													<div id="DIV_844">
														<a href="//www.championshockeyleague.com/en/teams/a9b6a968ed5120469a6af4b9/neman-grodno#" id="A_845"><span id="SPAN_846"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_847" /></span><span id="SPAN_848">Neman Grodno</span></a>
													</div>
													<div id="DIV_849">
														<div id="DIV_850">
															<span id="SPAN_851">2</span><span id="SPAN_852">3</span>
														</div>
													</div>
													<div id="DIV_853">
														<a href="//www.championshockeyleague.com/en/teams/4472b82fc7441fedc37b82e3/ev-zug#" id="A_854"><span id="SPAN_855"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_856" /></span><span id="SPAN_857">EV Zug</span></a>
													</div>
												</div>
											</td>
											<td id="TD_858">
												Grodno Ice Sports Palace
											</td>
										</tr>
										<tr id="TR_859">
											<td id="TD_860">
												<div id="DIV_861">
													<div id="DIV_862">
														27
													</div>
													<!-- react-text: 3370 -->

													<!-- /react-text -->

													<div id="DIV_863">
														Aug
													</div>
													<div id="DIV_864">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_865">
												Group C
											</td>
											<td id="TD_866">
												Gameday 2
											</td>
											<td id="TD_867">
												<div id="DIV_868">
													<div id="DIV_869">
														<a href="//www.championshockeyleague.com/en/teams/ff84fb0e0bc9eebe4f5878ae/jyp-jyvaskyla#" id="A_870"><span id="SPAN_871"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_872" /></span><span id="SPAN_873">JYP Jyväskylä</span></a>
													</div>
													<div id="DIV_874">
														<div id="DIV_875">
															<span id="SPAN_876">4</span><span id="SPAN_877">1</span>
														</div>
													</div>
													<div id="DIV_878">
														<a href="//www.championshockeyleague.com/en/teams/cf3bd921c50ff37026e8a011/vienna-capitals#" id="A_879"><span id="SPAN_880"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_881" /></span><span id="SPAN_882">Vienna Capitals</span></a>
													</div>
												</div>
											</td>
											<td id="TD_883">
												LähiTapiola Areena
											</td>
										</tr>
										<tr id="TR_884">
											<td id="TD_885">
												<div id="DIV_886">
													<div id="DIV_887">
														27
													</div>
													<!-- react-text: 3396 -->

													<!-- /react-text -->

													<div id="DIV_888">
														Aug
													</div>
													<div id="DIV_889">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_890">
												Group G
											</td>
											<td id="TD_891">
												Gameday 2
											</td>
											<td id="TD_892">
												<div id="DIV_893">
													<div id="DIV_894">
														<a href="//www.championshockeyleague.com/en/teams/fe8fa9181f95038048c2a80d/red-bull-munich#" id="A_895"><span id="SPAN_896"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_897" /></span><span id="SPAN_898">Red Bull Munich</span></a>
													</div>
													<div id="DIV_899">
														<div id="DIV_900">
															<span id="SPAN_901">4</span><span id="SPAN_902">1</span>
														</div>
													</div>
													<div id="DIV_903">
														<a href="//www.championshockeyleague.com/en/teams/93818912cf42a68e900e7d08/ifk-helsinki#" id="A_904"><span id="SPAN_905"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_906" /></span><span id="SPAN_907">IFK Helsinki</span></a>
													</div>
												</div>
											</td>
											<td id="TD_908">
												Olympia-Eisstadion
											</td>
										</tr>
										<tr id="TR_909">
											<td id="TD_910">
												<div id="DIV_911">
													<div id="DIV_912">
														27
													</div>
													<!-- react-text: 3422 -->

													<!-- /react-text -->

													<div id="DIV_913">
														Aug
													</div>
													<div id="DIV_914">
														20:30
													</div>
												</div>
											</td>
											<td id="TD_915">
												Group A
											</td>
											<td id="TD_916">
												Gameday 2
											</td>
											<td id="TD_917">
												<div id="DIV_918">
													<div id="DIV_919">
														<a href="//www.championshockeyleague.com/en/teams/aa8d051910780a557dc4a37f/red-bull-salzburg#" id="A_920"><span id="SPAN_921"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_922" /></span><span id="SPAN_923">Red Bull Salzburg</span></a>
													</div>
													<div id="DIV_924">
														<div id="DIV_925">
															<span id="SPAN_926">5</span><span id="SPAN_927">0</span>
														</div>
													</div>
													<div id="DIV_928">
														<a href="//www.championshockeyleague.com/en/teams/868a87fa2a8ef7d4a04ebc8f/hc-05-banska-bystrica#" id="A_929"><span id="SPAN_930"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_931" /></span><span id="SPAN_932">HC05 Banská Bystrica</span></a>
													</div>
												</div>
											</td>
											<td id="TD_933">
												Eisarena Salzburg
											</td>
										</tr>
										<tr id="TR_934">
											<td id="TD_935">
												<div id="DIV_936">
													<div id="DIV_937">
														31
													</div>
													<!-- react-text: 3448 -->

													<!-- /react-text -->

													<div id="DIV_938">
														Aug
													</div>
													<div id="DIV_939">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_940">
												Group B
											</td>
											<td id="TD_941">
												Gameday 3
											</td>
											<td id="TD_942">
												<div id="DIV_943">
													<div id="DIV_944">
														<a href="//www.championshockeyleague.com/en/teams/70002ab8714596f91aa6a514/kometa-brno#" id="A_945"><span id="SPAN_946"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_947" /></span><span id="SPAN_948">Kometa Brno</span></a>
													</div>
													<div id="DIV_949">
														<div id="DIV_950">
															<span id="SPAN_951">3</span><span id="SPAN_952">2</span>
														</div>
														<div id="DIV_953">
															<span id="SPAN_954">ot</span>
														</div>
													</div>
													<div id="DIV_955">
														<a href="//www.championshockeyleague.com/en/teams/d0017b49eaa2232d35e4939e/kal-pa-kuopio#" id="A_956"><span id="SPAN_957"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_958" /></span><span id="SPAN_959">KalPa Kuopio</span></a>
													</div>
												</div>
											</td>
											<td id="TD_960">
												DRFG Arena
											</td>
										</tr>
										<tr id="TR_961">
											<td id="TD_962">
												<div id="DIV_963">
													<div id="DIV_964">
														31
													</div>
													<!-- react-text: 3476 -->

													<!-- /react-text -->

													<div id="DIV_965">
														Aug
													</div>
													<div id="DIV_966">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_967">
												Group F
											</td>
											<td id="TD_968">
												Gameday 3
											</td>
											<td id="TD_969">
												<div id="DIV_970">
													<div id="DIV_971">
														<a href="//www.championshockeyleague.com/en/teams/225c7af9625921b18bebab78/tps-turku#" id="A_972"><span id="SPAN_973"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_974" /></span><span id="SPAN_975">TPS Turku</span></a>
													</div>
													<div id="DIV_976">
														<div id="DIV_977">
															<span id="SPAN_978">3</span><span id="SPAN_979">1</span>
														</div>
													</div>
													<div id="DIV_980">
														<a href="//www.championshockeyleague.com/en/teams/d782924e733c817e5af717fd/sc-bern#" id="A_981"><span id="SPAN_982"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_983" /></span><span id="SPAN_984">SC Bern</span></a>
													</div>
												</div>
											</td>
											<td id="TD_985">
												Gatorade Center
											</td>
										</tr>
										<tr id="TR_986">
											<td id="TD_987">
												<div id="DIV_988">
													<div id="DIV_989">
														31
													</div>
													<!-- react-text: 3502 -->

													<!-- /react-text -->

													<div id="DIV_990">
														Aug
													</div>
													<div id="DIV_991">
														19:30
													</div>
												</div>
											</td>
											<td id="TD_992">
												Group B
											</td>
											<td id="TD_993">
												Gameday 3
											</td>
											<td id="TD_994">
												<div id="DIV_995">
													<div id="DIV_996">
														<a href="//www.championshockeyleague.com/en/teams/d9faf64eaea21fb86ce70a49/malmo-redhawks#" id="A_997"><span id="SPAN_998"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_999" /></span><span id="SPAN_1000">Malmö Redhawks</span></a>
													</div>
													<div id="DIV_1001">
														<div id="DIV_1002">
															<span id="SPAN_1003">2</span><span id="SPAN_1004">1</span>
														</div>
													</div>
													<div id="DIV_1005">
														<a href="//www.championshockeyleague.com/en/teams/a18fffcd374ac47a8f6835d4/stavanger-oilers#" id="A_1006"><span id="SPAN_1007"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1008" /></span><span id="SPAN_1009">Stavanger Oilers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1010">
												Malmö Isstadion
											</td>
										</tr>
										<tr id="TR_1011">
											<td id="TD_1012">
												<div id="DIV_1013">
													<div id="DIV_1014">
														31
													</div>
													<!-- react-text: 3528 -->

													<!-- /react-text -->

													<div id="DIV_1015">
														Aug
													</div>
													<div id="DIV_1016">
														19:30
													</div>
												</div>
											</td>
											<td id="TD_1017">
												Group E
											</td>
											<td id="TD_1018">
												Gameday 3
											</td>
											<td id="TD_1019">
												<div id="DIV_1020">
													<div id="DIV_1021">
														<a href="//www.championshockeyleague.com/en/teams/59b68db03ae141bf08f49775/vaxjo-lakers#" id="A_1022"><span id="SPAN_1023"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1024" /></span><span id="SPAN_1025">Växjö Lakers</span></a>
													</div>
													<div id="DIV_1026">
														<div id="DIV_1027">
															<span id="SPAN_1028">5</span><span id="SPAN_1029">3</span>
														</div>
													</div>
													<div id="DIV_1030">
														<a href="//www.championshockeyleague.com/en/teams/fc04d1152903083968962750/hc-davos#" id="A_1031"><span id="SPAN_1032"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1033" /></span><span id="SPAN_1034">HC Davos</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1035">
												Vida Arena
											</td>
										</tr>
										<tr id="TR_1036">
											<td id="TD_1037">
												<div id="DIV_1038">
													<div id="DIV_1039">
														31
													</div>
													<!-- react-text: 3554 -->

													<!-- /react-text -->

													<div id="DIV_1040">
														Aug
													</div>
													<div id="DIV_1041">
														20:00
													</div>
												</div>
											</td>
											<td id="TD_1042">
												Group D
											</td>
											<td id="TD_1043">
												Gameday 3
											</td>
											<td id="TD_1044">
												<div id="DIV_1045">
													<div id="DIV_1046">
														<a href="//www.championshockeyleague.com/en/teams/be9ef52d3ac8aaa68001e2e6/esbjerg-energy#" id="A_1047"><span id="SPAN_1048"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1049" /></span><span id="SPAN_1050">Esbjerg Energy</span></a>
													</div>
													<div id="DIV_1051">
														<div id="DIV_1052">
															<span id="SPAN_1053">2</span><span id="SPAN_1054">7</span>
														</div>
													</div>
													<div id="DIV_1055">
														<a href="//www.championshockeyleague.com/en/teams/8b1dc0e6e12e79ab401aa775/hv-71-jonkoping#" id="A_1056"><span id="SPAN_1057"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1058" /></span><span id="SPAN_1059">HV71 Jönköping</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1060">
												Granly Hockey Arena
											</td>
										</tr>
										<tr id="TR_1061">
											<td id="TD_1062">
												<div id="DIV_1063">
													<div id="DIV_1064">
														31
													</div>
													<!-- react-text: 3580 -->

													<!-- /react-text -->

													<div id="DIV_1065">
														Aug
													</div>
													<div id="DIV_1066">
														20:30
													</div>
												</div>
											</td>
											<td id="TD_1067">
												Group D
											</td>
											<td id="TD_1068">
												Gameday 3
											</td>
											<td id="TD_1069">
												<div id="DIV_1070">
													<div id="DIV_1071">
														<a href="//www.championshockeyleague.com/en/teams/9bd414328e8c2658731938a0/adler-mannheim#" id="A_1072"><span id="SPAN_1073"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1074" /></span><span id="SPAN_1075">Adler Mannheim</span></a>
													</div>
													<div id="DIV_1076">
														<div id="DIV_1077">
															<span id="SPAN_1078">6</span><span id="SPAN_1079">2</span>
														</div>
													</div>
													<div id="DIV_1080">
														<a href="//www.championshockeyleague.com/en/teams/73de29021fd0d8d2cfd204d2/ocelari-trinec#" id="A_1081"><span id="SPAN_1082"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1083" /></span><span id="SPAN_1084">Oceláři Třinec</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1085">
												SAP Arena
											</td>
										</tr>
										<tr id="TR_1086">
											<td id="TD_1087">
												<div id="DIV_1088">
													<div id="DIV_1089">
														31
													</div>
													<!-- react-text: 3606 -->

													<!-- /react-text -->

													<div id="DIV_1090">
														Aug
													</div>
													<div id="DIV_1091">
														20:30
													</div>
												</div>
											</td>
											<td id="TD_1092">
												Group C
											</td>
											<td id="TD_1093">
												Gameday 3
											</td>
											<td id="TD_1094">
												<div id="DIV_1095">
													<div id="DIV_1096">
														<a href="//www.championshockeyleague.com/en/teams/cf3bd921c50ff37026e8a011/vienna-capitals#" id="A_1097"><span id="SPAN_1098"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1099" /></span><span id="SPAN_1100">Vienna Capitals</span></a>
													</div>
													<div id="DIV_1101">
														<div id="DIV_1102">
															<span id="SPAN_1103">1</span><span id="SPAN_1104">3</span>
														</div>
													</div>
													<div id="DIV_1105">
														<a href="//www.championshockeyleague.com/en/teams/ff84fb0e0bc9eebe4f5878ae/jyp-jyvaskyla#" id="A_1106"><span id="SPAN_1107"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1108" /></span><span id="SPAN_1109">JYP Jyväskylä</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1110">
												Albert Schultz Eishalle
											</td>
										</tr>
										<tr id="TR_1111">
											<td id="TD_1112">
												<div id="DIV_1113">
													<div id="DIV_1114">
														31
													</div>
													<!-- react-text: 3632 -->

													<!-- /react-text -->

													<div id="DIV_1115">
														Aug
													</div>
													<div id="DIV_1116">
														20:30
													</div>
												</div>
											</td>
											<td id="TD_1117">
												Group H
											</td>
											<td id="TD_1118">
												Gameday 3
											</td>
											<td id="TD_1119">
												<div id="DIV_1120">
													<div id="DIV_1121">
														<a href="//www.championshockeyleague.com/en/teams/954f0696fef5e714282a6d75/kac-klagenfurt#" id="A_1122"><span id="SPAN_1123"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1124" /></span><span id="SPAN_1125">KAC Klagenfurt</span></a>
													</div>
													<div id="DIV_1126">
														<div id="DIV_1127">
															<span id="SPAN_1128">2</span><span id="SPAN_1129">4</span>
														</div>
													</div>
													<div id="DIV_1130">
														<a href="//www.championshockeyleague.com/en/teams/ba55abe823bed83d7c12e7b3/frolunda-indians#" id="A_1131"><span id="SPAN_1132"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1133" /></span><span id="SPAN_1134">Frölunda Indians</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1135">
												Eissportzentrum Klagenfurt
											</td>
										</tr>
										<tr id="TR_1136">
											<td id="TD_1137">
												<div id="DIV_1138">
													<div id="DIV_1139">
														31
													</div>
													<!-- react-text: 3658 -->

													<!-- /react-text -->

													<div id="DIV_1140">
														Aug
													</div>
													<div id="DIV_1141">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_1142">
												Group C
											</td>
											<td id="TD_1143">
												Gameday 3
											</td>
											<td id="TD_1144">
												<div id="DIV_1145">
													<div id="DIV_1146">
														<a href="//www.championshockeyleague.com/en/teams/4472b82fc7441fedc37b82e3/ev-zug#" id="A_1147"><span id="SPAN_1148"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1149" /></span><span id="SPAN_1150">EV Zug</span></a>
													</div>
													<div id="DIV_1151">
														<div id="DIV_1152">
															<span id="SPAN_1153">3</span><span id="SPAN_1154">2</span>
														</div>
														<div id="DIV_1155">
															<span id="SPAN_1156">so</span>
														</div>
													</div>
													<div id="DIV_1157">
														<a href="//www.championshockeyleague.com/en/teams/a9b6a968ed5120469a6af4b9/neman-grodno#" id="A_1158"><span id="SPAN_1159"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1160" /></span><span id="SPAN_1161">Neman Grodno</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1162">
												Bossard Arena
											</td>
										</tr>
										<tr id="TR_1163">
											<td id="TD_1164">
												<div id="DIV_1165">
													<div id="DIV_1166">
														31
													</div>
													<!-- react-text: 3686 -->

													<!-- /react-text -->

													<div id="DIV_1167">
														Aug
													</div>
													<div id="DIV_1168">
														20:45
													</div>
												</div>
											</td>
											<td id="TD_1169">
												Group H
											</td>
											<td id="TD_1170">
												Gameday 3
											</td>
											<td id="TD_1171">
												<div id="DIV_1172">
													<div id="DIV_1173">
														<a href="//www.championshockeyleague.com/en/teams/b1dfe27dfb8fc9eb6ae5337a/zsc-lions-zurich#" id="A_1174"><span id="SPAN_1175"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1176" /></span><span id="SPAN_1177">ZSC Lions Zurich</span></a>
													</div>
													<div id="DIV_1178">
														<div id="DIV_1179">
															<span id="SPAN_1180">4</span><span id="SPAN_1181">0</span>
														</div>
													</div>
													<div id="DIV_1182">
														<a href="//www.championshockeyleague.com/en/teams/c641fe72a4abe82711785662/gap-rapaces#" id="A_1183"><span id="SPAN_1184"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1185" /></span><span id="SPAN_1186">Gap Rapaces</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1187">
												Hallenstadion
											</td>
										</tr>
										<tr id="TR_1188">
											<td id="TD_1189">
												<div id="DIV_1190">
													<div id="DIV_1191">
														31
													</div>
													<!-- react-text: 3712 -->

													<!-- /react-text -->

													<div id="DIV_1192">
														Aug
													</div>
													<div id="DIV_1193">
														21:00
													</div>
												</div>
											</td>
											<td id="TD_1194">
												Group F
											</td>
											<td id="TD_1195">
												Gameday 3
											</td>
											<td id="TD_1196">
												<div id="DIV_1197">
													<div id="DIV_1198">
														<a href="//www.championshockeyleague.com/en/teams/5f68cd148ecad68095b3dc90/nottingham-panthers#" id="A_1199"><span id="SPAN_1200"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1201" /></span><span id="SPAN_1202">Nottingham Panthers</span></a>
													</div>
													<div id="DIV_1203">
														<div id="DIV_1204">
															<span id="SPAN_1205">4</span><span id="SPAN_1206">3</span>
														</div>
														<div id="DIV_1207">
															<span id="SPAN_1208">ot</span>
														</div>
													</div>
													<div id="DIV_1209">
														<a href="//www.championshockeyleague.com/en/teams/31ffb756ae0a30e567dcf226/mountfield-hk#" id="A_1210"><span id="SPAN_1211"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1212" /></span><span id="SPAN_1213">Mountfield HK</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1214">
												Motorpoint Arena
											</td>
										</tr>
										<tr id="TR_1215">
											<td id="TD_1216">
												<div id="DIV_1217">
													<div id="DIV_1218">
														31
													</div>
													<!-- react-text: 3740 -->

													<!-- /react-text -->

													<div id="DIV_1219">
														Aug
													</div>
													<div id="DIV_1220">
														21:00
													</div>
												</div>
											</td>
											<td id="TD_1221">
												Group E
											</td>
											<td id="TD_1222">
												Gameday 3
											</td>
											<td id="TD_1223">
												<div id="DIV_1224">
													<div id="DIV_1225">
														<a href="//www.championshockeyleague.com/en/teams/c9bf4fa7c19a869b63257232/cardiff-devils#" id="A_1226"><span id="SPAN_1227"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1228" /></span><span id="SPAN_1229">Cardiff Devils</span></a>
													</div>
													<div id="DIV_1230">
														<div id="DIV_1231">
															<span id="SPAN_1232">3</span><span id="SPAN_1233">7</span>
														</div>
													</div>
													<div id="DIV_1234">
														<a href="//www.championshockeyleague.com/en/teams/865ec7e2959da256a2a97a8b/bili-tygri-liberec#" id="A_1235"><span id="SPAN_1236"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1237" /></span><span id="SPAN_1238">Bílí Tygři Liberec</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1239">
												Ice Arena Wales
											</td>
										</tr>
										<tr id="TR_1240">
											<td id="TD_1241">
												<div id="DIV_1242">
													<div id="DIV_1243">
														1
													</div>
													<!-- react-text: 3766 -->

													<!-- /react-text -->

													<div id="DIV_1244">
														Sep
													</div>
													<div id="DIV_1245">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_1246">
												Group A
											</td>
											<td id="TD_1247">
												Gameday 3
											</td>
											<td id="TD_1248">
												<div id="DIV_1249">
													<div id="DIV_1250">
														<a href="//www.championshockeyleague.com/en/teams/868a87fa2a8ef7d4a04ebc8f/hc-05-banska-bystrica#" id="A_1251"><span id="SPAN_1252"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1253" /></span><span id="SPAN_1254">HC05 Banská Bystrica</span></a>
													</div>
													<div id="DIV_1255">
														<div id="DIV_1256">
															<span id="SPAN_1257">0</span><span id="SPAN_1258">1</span>
														</div>
													</div>
													<div id="DIV_1259">
														<a href="//www.championshockeyleague.com/en/teams/8b38615a6eed4a83cb3cbe77/grizzlys-wolfsburg#" id="A_1260"><span id="SPAN_1261"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1262" /></span><span id="SPAN_1263">Grizzlys Wolfsburg</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1264">
												Banskà Bystrica Ice Stadium
											</td>
										</tr>
										<tr id="TR_1265">
											<td id="TD_1266">
												<div id="DIV_1267">
													<div id="DIV_1268">
														1
													</div>
													<!-- react-text: 3792 -->

													<!-- /react-text -->

													<div id="DIV_1269">
														Sep
													</div>
													<div id="DIV_1270">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_1271">
												Group G
											</td>
											<td id="TD_1272">
												Gameday 3
											</td>
											<td id="TD_1273">
												<div id="DIV_1274">
													<div id="DIV_1275">
														<a href="//www.championshockeyleague.com/en/teams/93818912cf42a68e900e7d08/ifk-helsinki#" id="A_1276"><span id="SPAN_1277"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1278" /></span><span id="SPAN_1279">IFK Helsinki</span></a>
													</div>
													<div id="DIV_1280">
														<div id="DIV_1281">
															<span id="SPAN_1282">2</span><span id="SPAN_1283">5</span>
														</div>
													</div>
													<div id="DIV_1284">
														<a href="//www.championshockeyleague.com/en/teams/199734faffe3b90bf3ecccce/brynas-if#" id="A_1285"><span id="SPAN_1286"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1287" /></span><span id="SPAN_1288">Brynäs IF</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1289">
												Helsingin Jäähalli
											</td>
										</tr>
										<tr id="TR_1290">
											<td id="TD_1291">
												<div id="DIV_1292">
													<div id="DIV_1293">
														1
													</div>
													<!-- react-text: 3818 -->

													<!-- /react-text -->

													<div id="DIV_1294">
														Sep
													</div>
													<div id="DIV_1295">
														19:00
													</div>
												</div>
											</td>
											<td id="TD_1296">
												Group A
											</td>
											<td id="TD_1297">
												Gameday 3
											</td>
											<td id="TD_1298">
												<div id="DIV_1299">
													<div id="DIV_1300">
														<a href="//www.championshockeyleague.com/en/teams/6a0612c54317b473a6f67f56/tappara-tampere#" id="A_1301"><span id="SPAN_1302"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1303" /></span><span id="SPAN_1304">Tappara Tampere</span></a>
													</div>
													<div id="DIV_1305">
														<div id="DIV_1306">
															<span id="SPAN_1307">4</span><span id="SPAN_1308">2</span>
														</div>
													</div>
													<div id="DIV_1309">
														<a href="//www.championshockeyleague.com/en/teams/aa8d051910780a557dc4a37f/red-bull-salzburg#" id="A_1310"><span id="SPAN_1311"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1312" /></span><span id="SPAN_1313">Red Bull Salzburg</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1314">
												Hakametsä Stadium
											</td>
										</tr>
										<tr id="TR_1315">
											<td id="TD_1316">
												<div id="DIV_1317">
													<div id="DIV_1318">
														1
													</div>
													<!-- react-text: 3844 -->

													<!-- /react-text -->

													<div id="DIV_1319">
														Sep
													</div>
													<div id="DIV_1320">
														19:30
													</div>
												</div>
											</td>
											<td id="TD_1321">
												Group G
											</td>
											<td id="TD_1322">
												Gameday 3
											</td>
											<td id="TD_1323">
												<div id="DIV_1324">
													<div id="DIV_1325">
														<a href="//www.championshockeyleague.com/en/teams/3cdf75240ca3dc12459e879c/comarch-cracovia#" id="A_1326"><span id="SPAN_1327"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1328" /></span><span id="SPAN_1329">Comarch Cracovia</span></a>
													</div>
													<div id="DIV_1330">
														<div id="DIV_1331">
															<span id="SPAN_1332">1</span><span id="SPAN_1333">2</span>
														</div>
													</div>
													<div id="DIV_1334">
														<a href="//www.championshockeyleague.com/en/teams/fe8fa9181f95038048c2a80d/red-bull-munich#" id="A_1335"><span id="SPAN_1336"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1337" /></span><span id="SPAN_1338">Red Bull Munich</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1339">
												Lodowisko Adama Kowalskiego
											</td>
										</tr>
										<tr id="TR_1340">
											<td id="TD_1341">
												<div id="DIV_1342">
													<div id="DIV_1343">
														2
													</div>
													<!-- react-text: 3870 -->

													<!-- /react-text -->

													<div id="DIV_1344">
														Sep
													</div>
													<div id="DIV_1345">
														14:30
													</div>
												</div>
											</td>
											<td id="TD_1346">
												Group B
											</td>
											<td id="TD_1347">
												Gameday 4
											</td>
											<td id="TD_1348">
												<div id="DIV_1349">
													<div id="DIV_1350">
														<a href="//www.championshockeyleague.com/en/teams/70002ab8714596f91aa6a514/kometa-brno#" id="A_1351"><span id="SPAN_1352"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1353" /></span><span id="SPAN_1354">Kometa Brno</span></a>
													</div>
													<div id="DIV_1355">
														<div id="DIV_1356">
															<span id="SPAN_1357">4</span><span id="SPAN_1358">3</span>
														</div>
														<div id="DIV_1359">
															<span id="SPAN_1360">ot</span>
														</div>
													</div>
													<div id="DIV_1361">
														<a href="//www.championshockeyleague.com/en/teams/a18fffcd374ac47a8f6835d4/stavanger-oilers#" id="A_1362"><span id="SPAN_1363"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1364" /></span><span id="SPAN_1365">Stavanger Oilers</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1366">
												DRFG Arena
											</td>
										</tr>
										<tr id="TR_1367">
											<td id="TD_1368">
												<div id="DIV_1369">
													<div id="DIV_1370">
														2
													</div>
													<!-- react-text: 3898 -->

													<!-- /react-text -->

													<div id="DIV_1371">
														Sep
													</div>
													<div id="DIV_1372">
														16:00
													</div>
												</div>
											</td>
											<td id="TD_1373">
												Group B
											</td>
											<td id="TD_1374">
												Gameday 4
											</td>
											<td id="TD_1375">
												<div id="DIV_1376">
													<div id="DIV_1377">
														<a href="//www.championshockeyleague.com/en/teams/d9faf64eaea21fb86ce70a49/malmo-redhawks#" id="A_1378"><span id="SPAN_1379"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1380" /></span><span id="SPAN_1381">Malmö Redhawks</span></a>
													</div>
													<div id="DIV_1382">
														<div id="DIV_1383">
															<span id="SPAN_1384">6</span><span id="SPAN_1385">2</span>
														</div>
													</div>
													<div id="DIV_1386">
														<a href="//www.championshockeyleague.com/en/teams/d0017b49eaa2232d35e4939e/kal-pa-kuopio#" id="A_1387"><span id="SPAN_1388"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" alt="" id="IMG_1389" /></span><span id="SPAN_1390">KalPa Kuopio</span></a>
													</div>
												</div>
											</td>
											<td id="TD_1391">
												Malmö Isstadion
											</td>
										</tr>
									</tbody>
									<tfoot id="TFOOT_1392">
									</tfoot>
								</table>
							</article>
							<footer id="FOOTER_1393">
								<button id="BUTTON_1394">
									Show more
								</button>
								<div id="DIV_1395">
									<p id="P_1396">
										All times are local to your device
									</p>
								</div>
							</footer>
						</section>
					</section>
					<script id="SCRIPT_1397">corebine.import('markups/modules/sport/spec/hockey/schedule/schedule').then(function(module) {
                    module.ScheduleModule('#id-372665', {
                        baseFeedsUrl: 'http://www.championshockeyleague.com/api/s3?q=schedule-21ec9dad81abe2e0240460d0-7ff8d796a87a86b861bf9e22.json',
                        liveFeedsUrl: 'http://www.championshockeyleague.com/api/s3/live?q=live-events.json',
                        season: '2017/18',
                        teamId: '',
                        pageContentEl: '.l-page-content',
                        chunkSize: 50,
                        queryMinInterval: 60000,
                        queryMaxInterval: 900000
                    });
                });
					</script>
				</div>
			</div>
		<div id="DIV_1398">
					<div id="DIV_1399">
						<section id="SECTION_1400">
							<div id="DIV_1401">
								 <span id="SPAN_1402">No schedule available</span>
							</div>
						</section>
						<script id="SCRIPT_1403">corebine.import('markups/modules/sport/spec/hockey/schedule/schedule').then(function(module) {
                    module.ScheduleModule('#id-372669', {
                        baseFeedsUrl: 'http://www.championshockeyleague.com/api/s3?q=schedule-21ec9dad81abe2e0240460d0-741bae588668e5c4a0eeade1.json',
                        liveFeedsUrl: 'http://www.championshockeyleague.com/api/s3/live?q=live-events.json',
                        season: '2016/17',
                        teamId: '',
                        pageContentEl: '.l-page-content',
                        chunkSize: 50,
                        queryMinInterval: 60000,
                        queryMaxInterval: 900000
                    });
                });
						</script>
					</div>
				</div>
		<div id="DIV_1404">
						<div id="DIV_1405">
							<section id="SECTION_1406">
								<div id="DIV_1407">
									 <span id="SPAN_1408">No schedule available</span>
								</div>
							</section>
							<script id="SCRIPT_1409">corebine.import('markups/modules/sport/spec/hockey/schedule/schedule').then(function(module) {
                    module.ScheduleModule('#id-372673', {
                        baseFeedsUrl: 'http://www.championshockeyleague.com/api/s3?q=schedule-21ec9dad81abe2e0240460d0-512ec0d6dfe80058c7fed4f6.json',
                        liveFeedsUrl: 'http://www.championshockeyleague.com/api/s3/live?q=live-events.json',
                        season: '2015/16',
                        teamId: '',
                        pageContentEl: '.l-page-content',
                        chunkSize: 50,
                        queryMinInterval: 60000,
                        queryMaxInterval: 900000
                    });
                });
							</script>
						</div>
					</div>
		<div id="DIV_1410">
							<div id="DIV_1411">
								<section id="SECTION_1412">
									<div id="DIV_1413">
										 <span id="SPAN_1414">No schedule available</span>
									</div>
								</section>
								<script id="SCRIPT_1415">corebine.import('markups/modules/sport/spec/hockey/schedule/schedule').then(function(module) {
                    module.ScheduleModule('#id-372677', {
                        baseFeedsUrl: 'http://www.championshockeyleague.com/api/s3?q=schedule-21ec9dad81abe2e0240460d0-0acaee27317455a72a914215.json',
                        liveFeedsUrl: 'http://www.championshockeyleague.com/api/s3/live?q=live-events.json',
                        season: '2014/15',
                        teamId: '',
                        pageContentEl: '.l-page-content',
                        chunkSize: 50,
                        queryMinInterval: 60000,
                        queryMaxInterval: 900000
                    });
                });
								</script>
							</div>
						</div>
	</section>
	<script id="SCRIPT_1416">corebine.import('markups/modules/select/select').then(function (module) {
                    module.SelectModule('#id-372657', {
                        currentOption: '0',
                        selectType: 'schedule'
                    });
                });
						</script>
</div>
						</div>
					</div><!-- .widget-body -->
				
			
			

   
   <div class="col-md-6">
						<div class="user-card contact-item p-md">
							<div class="media">
								<div class="media-left">
									<div class="avatar avatar-xl avatar-circle">
										<img src="../assets/images/201.jpg" alt="contact image">
									</div>
								</div>
								<div class="media-body">
									<h5 class="media-heading title-color">Sara Adams</h5>
									<small class="media-meta">Web Designer</small>
									<div class="contact-links m-t-sm">
										<a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Phone" data-placement="top"><i class="fa fa-phone"></i></a>
										<a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Mobile" data-placement="top"><i class="fa fa-mobile"></i></a>
										<a href="mailto:example@rathemes.com" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="example@rathemes.com" data-placement="top"><i class="fa fa-envelope-o"></i></a>
										<a href="javascript:void(0)" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="rathemes" data-placement="top"><i class="fa fa-skype"></i></a>
										<a href="https://facebook.com/rathemes" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Facebook" data-placement="top"><i class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/rathemes" class="icon icon-circle icon-sm m-b-0" data-toggle="tooltip" title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="contact-item-actions">
								<a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#contactModal"><i class="fa fa-pencil"></i></a>
								<a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#deleteItemModal"><i class="fa fa-trash"></i></a>
							</div><!-- .contact-item-actions -->
						</div><!-- user-card -->
					</div><!-- END column -->
   
   
   
   
   
   
   
   
   
   
    </div>
   <!-- END tab-pane 2 -->

    <div role="tabpanel" class="tab-pane fade" id="tab-3">
        <table class="table table-hover">
								        <tbody id="left">
<?php
$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 1 and 5;";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '
                           <tr align="center">
                                <td>'.$row[number_match].'</td>
                                <td>'.$row[data_match].'<br>'.$row[time_match].'</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px">
                                    <p><span>'.$row[team_1].'</span></p>
                                <td>
                                    <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px">
                                       <p><span>'.$row[team_2].'</span></p>
                                       <!-- ввод прогноза -->
                               <td class="im1">
        <div class="form-group">
            <input id="iScore1">
        </div>
    </td>

        <td class="im1">
            <div class="form-group">
                <input id="iScore2">
            </div>
        </td>
        <td class="im2">
            <button onclick="onClick()">calc</button>
            <div id="res"></div>

        </td>
        <td class="im2">
            <button onclick="runTests()">test</button>
        </td>
                            </tr>
    
                           
                             ';
}
?>
        </table>
        
    </div>
    
    <!-- .tab-pane  -->
    </div>
    <!-- .tab-content  -->
    </div>
    <!-- .nav-tabs-horizontal -->
    </div>
    <!-- .widget -->
    </div>
    <!-- END column -->


    <!-- END Табы -->
			
			<!-- line-up-->
			
			<div class="col-md-4">
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title" align="center">Программа тура: <span>1</span></h4>
				  </header><!-- .widget-header -->
				  
				  <div class="widget-body">
				  
				  <table class="table table-hover">
				      <tbody id="right">
				  
	<?php			  

$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 1 and 5;";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '



                           <tr>
    <td>
        <img src="../assets/images/logo/shl/malmo_redhawks.png" width="42px" height="42px" id="logo-1">
            <span class="team-name">Мальмо</span>
    </td>


    <td class="data-s">
        <span class="data-s">'.$row[data_match].'</span>
        <p><span class="time">'.$row[time_match].'</span></p>

    </td>


    <td>
          
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="42px" height="42px" id="logo-2">
          <p><span class="team-name">Фрелунда</span></p>
    </td>
    
    <td>
    <div class="form-group">
        <select id="form-controls" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>Нп</option>
                                      </select>
    </div>
    
    <!-- Кнопка "удалить"-->
<td id="im3">

<i class="glyphicon glyphicon-remove" aria-hidden="true"></i> 
                     

</td>
</tr>
 
    
                          
                             ';
}
?>
</tbody> 
    </table>
               
					
					</div><!-- .widget-body -->
				</div><!-- .widget -->
				
				<a href="#" class="buton-save">Сохранить</a>
			
			</div><!-- END column -->
			<!-- END My Dreamteam-->
			
        </div>
        </div>
        </section>
	</div>		
</main>
<!--========== END app main -->

	
                 <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>
                <script src="/assets/js/functions_score.js"></script>
					

</body>
