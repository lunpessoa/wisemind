
<style>
        .toast-header {
            background-color: rgba(38, 40, 46, 0.8)
        }

        .toast-green {
            background-color: rgba(40, 167, 69, 0.7)
        }

        .toast-red {
            background-color: rgba(220, 53, 69, 0.7)
        }

        .toast-normal {
            background-color: rgba(94, 94, 94, 0.7)
        }

        .toast-btn {
            float: right;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            opacity: 0.8;
        }
    </style>
    <div class="position-fixed" style="z-index:10; right:20px; top:110px;">
        <div class="toast bg-transparent" role="status" aria-live="polite" aria-atomic="true" data-autohide="false"
            id="toast">
            <div class="toast-header">
                <img src="../img/logo.png" class="rounded mr-2 " alt="...">
                <div id="header"></div>
                <button type="button" class="btn ml-2 mb-1 toast-btn" data-dismiss="toast" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>
    </div>