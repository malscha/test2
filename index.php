<!DOCTYPE html>
<html>

<head>
    <title>Timezone Converter</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- Include DataTables Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

</head>

<body>
    <div class="container">
        <h1 class="mt-5">Timezone Converter</h1>
        <form>
            <div class="form-row">
                <div class="col-md-8 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="time-input">Enter a time:</label>
                        </div>
                        <input type="text" class="form-control" id="time-input" name="time-input">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Convert</button>
                </div>
            </div>
        </form>
        <div id="time-table"></div>
    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- Include custom JavaScript -->
    <script src="script.js"></script>
</body>

</html>