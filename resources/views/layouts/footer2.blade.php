
<footer class="p-5 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                
                <p class="mb-3 text-center">
                    © {{ date('Y') }} 
                    <span class="text-primary fw-normal">QParking.</span> All rights reserved.
                </p>

                <ul class="list-inline list-group-flush list-group-borderless">
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.about') }}">About us</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.support') }}">Support</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.privacy') }}">Privacy</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="{{ route('qp.contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>