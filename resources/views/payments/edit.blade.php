<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Payment</h1>
        <form action="{{ route('payments.update', $payment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $payment->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="payment_type" class="form-label">Payment Type</label>
                <select class="form-control" id="payment_type" name="payment_type" required>
                    <option value="khalti" {{ $payment->payment_type == 'khalti' ? 'selected' : '' }}>Khalti</option>
                    <option value="esewa" {{ $payment->payment_type == 'esewa' ? 'selected' : '' }}>Esewa</option>
                    <option value="bank" {{ $payment->payment_type == 'bank' ? 'selected' : '' }}>Bank</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" required>
            </div>
            <div class="mb-3">
                <label for="payment_date" class="form-label">Payment Date</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>