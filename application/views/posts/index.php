<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
			integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
			crossorigin="anonymous"
		/>

		<title>Ajax Posts</title>

        <link rel="stylesheet/less" type="text/css" href="<?= base_url() ?>assets/less/index.less" />
        <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

        <style>

        </style>
	</head>
	<body>
		<!-- As a heading -->
		<nav class="navbar navbar-light mb-5">
			<span class="navbar-brand mb-0 h1">My Posts</span>
		</nav>

		<div class="container-fluid">
            <div class="row notes">
                
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <form action="notes/create" method="POST">
                        <div class="form-group">
                            <label for="note">Add a note:</label>
                            <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Post It!</button>
                    </form>
                </div>
            </div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
			crossorigin="anonymous"
		></script>
        <script>
            $(document).ready(function(){
                $.get('notes/index_html', function(res) {
                    $('.notes').html(res);
                });
            });
        </script>
	</body>
</html>
