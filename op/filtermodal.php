<?php
echo '

<!-- filterModal -->
<div class="modal fade modal-top p-0" id="filterModal" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content rounded-0 full-height LavenderBlush">
			<div class="modal-header rounded-0 btn-info-color">
				<h3 class="modal-title text-light">Szűrés</h3>
				<button type="button" class="close text-light" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="LavenderBlush p-0">
				<div class="card rounded-0 border-none">
					<div class="card-header LavenderBlush rounded-0" id="headingOne">
						<button class="btn btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapse1"><h5 class="text-dark m-0">Ár</h5></button>
					</div>
					<div id="collapse1" class="collapse LavenderBlush border-bottom-1px">
						<div class="card-body levanderBlushLighter rounded-0">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="priceCheck1">
								<label class="form-check-label" for="priceCheck1">0 Ft - 1000 Ft</label><br>
								<input class="form-check-input" type="checkbox" value="" id="priceCheck2">
								<label class="form-check-label" for="priceCheck2">1001 Ft - 2000 Ft</label><br>
								<input class="form-check-input" type="checkbox" value="" id="priceCheck3">
								<label class="form-check-label" for="priceCheck3">2001 Ft - 5000 Ft</label><br>
								<input class="form-check-input" type="checkbox" value="" id="priceCheck4">
								<label class="form-check-label" for="priceCheck4">5001 Ft - </label><br>
							</div>
						</div>
					</div>
				</div>
				<div class="card rounded-0 border-none">
					<div class="card-header LavenderBlush rounded-0" id="headingOne">
						<button class="btn btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapse2"><h5 class="text-dark m-0">Méret</h5></button>
					</div>
					<div id="collapse2" class="collapse LavenderBlush border-bottom-1px">
						<div class="card-body levanderBlushLighter rounded-0">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="sizeCheck1">
								<label class="form-check-label" for="sizeCheck1">50 - 56</label><br>
								<input class="form-check-input" type="checkbox" value="" id="sizeCheck2">
								<label class="form-check-label" for="sizeCheck2">62 - 68</label><br>
								<input class="form-check-input" type="checkbox" value="" id="sizeCheck3">
								<label class="form-check-label" for="sizeCheck3">68 - 74</label><br>
								<input class="form-check-input" type="checkbox" value="" id="sizeCheck4">
								<label class="form-check-label" for="sizeCheck4">74 - 80</label><br>
								<input class="form-check-input" type="checkbox" value="" id="sizeCheck5">
								<label class="form-check-label" for="sizeCheck5">74 - 80</label><br>
							</div>
						</div>
					</div>
				</div>
				<div class="card rounded-0 border-none">
					<div class="card-header LavenderBlush rounded-0" id="headingOne">
						<button class="btn btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapse3"><h5 class="text-dark m-0">Szín</h5></button>
					</div>
					<div id="collapse3" class="collapse LavenderBlush border-bottom-1px">
						<div class="card-body levanderBlushLighter rounded-0">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="colorCheck1">
								<label class="form-check-label" for="colorCheck1">Fehér</label><br>
								<input class="form-check-input" type="checkbox" value="" id="colorCheck2">
								<label class="form-check-label" for="colorCheck2">Rózsaszín</label><br>
								<input class="form-check-input" type="checkbox" value="" id="colorCheck3">
								<label class="form-check-label" for="colorCheck3">Piros</label><br>
								<input class="form-check-input" type="checkbox" value="" id="colorCheck4">
								<label class="form-check-label" for="colorCheck4">Kék</label><br>
								<input class="form-check-input" type="checkbox" value="" id="colorCheck5">
								<label class="form-check-label" for="colorCheck5">Barna</label><br>
							</div>
						</div>
					</div>
				</div>
				<div class="card rounded-0 border-none">
					<div class="card-header LavenderBlush rounded-0" id="headingOne">
						<button class="btn btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapse4"><h5 class="text-dark m-0">Rendezés</h5></button>
					</div>
					<div id="collapse4" class="collapse LavenderBlush border-bottom-1px">
						<div class="card-body levanderBlushLighter rounded-0">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sortRadios" id="sortRadio1">
								<label class="form-check-label" for="sortRadio1">Olcsóbbak előre</label><br>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sortRadios" id="sortRadio2">
								<label class="form-check-label" for="sortRadio2">Drágábbak előre</label><br>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sortRadios" id="sortRadio3">
								<label class="form-check-label" for="sortRadio3">Újabbak előre</label><br>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sortRadios" id="sortRadio4">
								<label class="form-check-label" for="sortRadio4">Régebbiek előre</label><br>
							</div>
							<div class="form-check">	
								<input class="form-check-input" type="radio" name="sortRadios" value="" id="sortRadio5">
								<label class="form-check-label" for="sortRadio5">Legnézettebbek előre</label><br>
							</div>
						</div>
					</div>
				</div>
  			</div>
		</div>
	</div>
</div>
<!-- filterModal -->

';
?>