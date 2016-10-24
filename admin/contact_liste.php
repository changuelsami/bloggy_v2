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
							<?php
							require_once("../classes/Contact_OK2.php");
							$c = new Contact();
							$liste = $c->liste();
							foreach ($liste as $contact) {
							?>
							<tr>
								<td><?php echo $contact->_id; ?></td>
								<td><?php echo $contact->_email; ?></td>
								<td><?php echo $contact->_sujet; ?></td>
								<td><?php echo $contact->_d_ajout; ?></td>
								<td>
									<a href="contact_supprimer_action.php?id=<?php echo $contact->_id; ?>" 
									   onclick="return supprimer()" class="btn btn-danger btn-xs">Suprimer</a>
								</td>
							</tr>
							<?php 
							} // foreach
							?>

						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
