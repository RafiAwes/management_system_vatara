<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Request For Course</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-black text-center">
                <h2 class="font-bold text-white">Give us yout details</h2>
            </div>
            <div class="card-body mt-3">
                <form action="{{route('submit.request')}}" method="post">
                     <!-- Name input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>

                    <!-- Phone number input -->
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Email input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Image upload -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>


</body>
</html>
