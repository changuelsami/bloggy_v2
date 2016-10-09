<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Contact</h2>

					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>E-mail</th>
								<th>Sujet</th>
								<th>Date</th>
								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							<tr>
								<td>5</td>
								<td>john@doo.tn</td>
								<td>Votre blog est top !</td>
								<td>08/10/2016</td>
								<td>
									<a href="#" class="btn btn-danger btn-xs">Suprimer</a>
								</td>
							</tr>
							<!-- ** Fin de la boucle ** -->

							<!-- ** Supprimer les 2 lignes (TR) ci-dessous ** -->
							<tr>
								<td>3</td>
								<td>jean@dupond.tn</td>
								<td>Petite question</td>
								<td>07/10/2016</td>
								<td>
									<a href="#" class="btn btn-danger btn-xs">Suprimer</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>jack@foo.tn</td>
								<td>Comment t'aa fait ??</td>
								<td>05/10/2016</td>
								<td>
									<a href="#" class="btn btn-danger btn-xs">Suprimer</a>
								</td>
							</tr>

						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
