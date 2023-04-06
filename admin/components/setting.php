<style>
    details {
        background: #f1f1f1;
        padding: 10px;
        font-size: 16px;
    }

    details input {
        border: 1px solid black;
        border-radius: 5px;
    }

    #logout {
        padding: 10px;
        background: #ff000015;
        color: red;
        margin-top: 30px;
        border: 1px solid red;
        border-radius: 10px;
    }
</style>
<div class="container">
    <details>
        <summary>change password</summary>
        <div>
            <div class="sub-heading">New password</div>
            <input id="setting_newpass" type="text" value="">

            <div class="gap"></div>

            <div class="sub-heading">Old password</div>
            <input id="setting_oldpass" type="text" value="">
            <div class="gap"></div>
            <div class="btn-box-global">
                <button id="setting_cancelfile" value="Upload">cancel</button>
                <button id="setting_savefile" onclick="changePassword()" value="Upload">submit</button>
            </div>
            <div class="gap"></div>
        </div>
    </details>

    <div id="logout">
        logout
    </div>
</div>
<script>
    async function changePassword() {
        let oldpass = document.getElementById('setting_oldpass').value;
        let newpass = document.getElementById('setting_newpass').value;
        if (oldpass != '' && newpass != '') {

            const response = await fetch('./php/changepassword.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `oldpass=${oldpass}&newpass=${newpass}`
            });
            const result = await response.text();
            if (result === 'true') {
                alert('Password changed successfully');
                sessionStorage.setItem('auth', 'true');
                sessionStorage.setItem('username', 'khs');
                sessionStorage.setItem('password', newpass);
            } else {
                alert('old password not same');
            }
        }
    }

    logout.onclick = function () {
        if (confirm('Are you sure you want to logout')) {
            sessionStorage.setItem('auth', 'false');
            sessionStorage.setItem('username', '');
            sessionStorage.setItem('password', '');
            window.location.reload();
        }
    }
</script>