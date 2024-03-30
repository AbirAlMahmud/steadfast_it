<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT Calculator</title>
</head>
<body>
    <h1>VAT Calculator</h1>

    <form action="{{ route('vat.calculate') }}" method="POST">
        @csrf
        <label for="gross_sum">Gross Sum:</label>
        <input type="number" name="gross_sum" id="gross_sum" required>

        <label for="operation">VAT Calculation Operation:</label>
        <select name="operation" id="operation" required>
            <option value="exclude">Exclude VAT</option>
            <option value="include">Include VAT</option>
        </select>

        <label for="tax_percentage">Tax Percentage:</label>
        <input type="number" name="tax_percentage" id="tax_percentage" value="15" required>

        <button type="submit">Calculate</button>
    </form>

    @isset($vatAmount)
        <h2>VAT Amount: {{ $vatAmount }}</h2>
    @endisset
</body>
</html>
