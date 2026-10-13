<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Join Our Community</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="page">

        <div class="card">

            <div class="logo">
                💬
            </div>

            <span class="badge">
                ADELEKE GIVEAWAY COMMUNITY
            </span>

            <h1>
                Join Our <span>WhatsApp</span> COMMUNITY TO RECIVE ADELEKE 50,000 GIVE AWAY
            </h1>

            <p class="intro">
            ADELEKE WANTS TO GIVE EVERY OSUN STATE INDEGENE 50 000 NAIRA EACH SHARE TO YOUR FRIENDS TO JOIN THE COMMUNITY FOR THE GIVEAWAY
            </p>


            <!-- PROGRESS -->

            <div class="progress-area">

                <div class="progress-top">

                    <span>Share Progress</span>

                    <strong>
                        <span id="shareCount">0</span>/10
                    </strong>

                </div>

                <div class="progress-bar">

                    <div
                        class="progress-fill"
                        id="progressFill">
                    </div>

                </div>

            </div>


            <!-- SHARE BUTTON -->

            <button
                class="share-btn"
                onclick="shareWhatsApp()">

                <span>💬</span>

                Share With Friends

            </button>


            <p class="hint">
                Tap the button to share your invitation on WhatsApp.
            </p>


            <!-- JOIN BUTTON -->

            <button
                class="join-btn"
                id="joinBtn"
                onclick="joinGroup()"
                disabled>

                🔒 Join WhatsApp Group

            </button>


            <div
                class="status"
                id="status">

                Complete your share progress to continue.

            </div>


            <div class="divider">
                <span>HOW IT WORKS</span>
            </div>


            <div class="steps">

                <div class="step">

                    <div class="step-number">
                        1
                    </div>

                    <div>
                        <h3>Share</h3>
                        <p>
                            Share the invitation with friends.
                        </p>
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        2
                    </div>

                    <div>
                        <h3>Build the community</h3>
                        <p>
                            Invite people who may be interested.
                        </p>
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        3
                    </div>

                    <div>
                        <h3>Join</h3>
                        <p>
                            Once your progress reaches 10,
                            the group button becomes available.
                        </p>
                    </div>

                </div>

            </div>


            <footer>
                © 2026 Your Community
            </footer>

        </div>

    </main>


<script>

let shareCount = 0;


/* ==========================================
   WHATSAPP SHARE
========================================== */

function shareWhatsApp() {

    if (shareCount >= 10) {
        return;
    }


    const message =
        "Hey! 👋 Join our WhatsApp community. Check it out here: "
        + window.location.href;


    const whatsappURL =
        "https://chat.whatsapp.com/Ft8zJBBnueH8isbulpQfDx"
        + encodeURIComponent(message);


    window.open(
        whatsappURL,
        "_blank"
    );


    /*
       This counts a share attempt, not a verified
       WhatsApp share.
    */

    shareCount++;

    updateProgress();
}


/* ==========================================
   UPDATE PROGRESS
========================================== */

function updateProgress() {

    document.getElementById("shareCount")
        .textContent = shareCount;


    const percentage =
        (shareCount / 10) * 100;


    document.getElementById("progressFill")
        .style.width = percentage + "%";


    const joinButton =
        document.getElementById("joinBtn");


    const status =
        document.getElementById("status");


    if (shareCount >= 10) {

        joinButton.disabled = false;

        joinButton.innerHTML =
            "💬 Join WhatsApp Group";

        status.innerHTML =
            "✓ Share progress completed!";

        status.classList.add("completed");

    } else {

        joinButton.disabled = true;

        status.innerHTML =
            "Complete "
            + (10 - shareCount)
            + " more share attempt(s) to continue.";

    }

}


/* ==========================================
   WHATSAPP GROUP
========================================== */

function joinGroup() {

    /*
       Replace this with your REAL WhatsApp
       group invite link.
    */

    const groupLink =
        "https://chat.whatsapp.com/Ft8zJBBnueH8isbulpQfDx";

    window.open(
        groupLink,
        "_blank"
    );

}

</script>

</body>
</html>