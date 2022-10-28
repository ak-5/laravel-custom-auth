<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<style>
	.box {
		font-size: 25px;
		/*height: 50px;*/
		border: 1px solid black;
		color: black;
		background-color: yellow;
		margin: 10px;
		text-align: center;
		width: 250px;
		height: 170px;

	}

	.flex-container {
		margin-top: 3em;
		display: flex;
		justify-content: space-evenly;
		align-items: flex-end;
		/*flex-direction: column;*/
	}
	.flex-container div:nth-child(1) {
		height: 58px;
		/*align-self: baseline;*/
		/*flex-grow: 2;*/
		order: 4;
	}

	.flex-container div:nth-child(2) {
		height: 98px;
		order: 2;
		/*flex-grow: 1;*/
	}

	.flex-container div:nth-child(2) {
		height: 98px;
		order: 1;		flex-shrink: 2;

		/*flex-grow: 1;*/
	}
</style>
<body>

<div class="flex-container">
	<div class="box">1</div>
	<div class="box">2</div>
	<div class="box">3</div>
</div>

</body>
</html>