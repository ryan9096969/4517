<div style="max-width:900px; margin:40px auto; background:white; padding:30px; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">

    <h1 style="text-align:center; color:#d68a7e;">🐰 Reserve Your Table at Rabbit Cafe</h1>
    <p style="text-align:center; color:#8c6648; font-size:18px;">Relax and enjoy your boardgame time</p>

    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf

        <label>Date</label>
        <input type="date" name="date" required min="{{ date('Y-m-d') }}">

        <label>Time Slot</label>
        <select name="time_slot" required>
            <option value="">-- Choose time slot --</option>
            <option value="2:00 PM - 4:00 PM">2:00 PM - 4:00 PM</option>
            <option value="4:30 PM - 6:30 PM">4:30 PM - 6:30 PM</option>
            <option value="7:00 PM - 9:00 PM">7:00 PM - 9:00 PM</option>
        </select>

        <label style="margin-top:25px;">Filter Tables</label><br>
        <button type="button" onclick="filterTables('all')"     class="filter-btn">Show All</button>
        <button type="button" onclick="filterTables('standard')" class="filter-btn">Standard Tables</button>
        <button type="button" onclick="filterTables('private')"  class="filter-btn">Private Rooms</button>

        <label style="margin-top:25px;">Available Tables & Rooms</label>
        <div id="tableList">
            <div class="table-option" data-type="standard">
                <input type="radio" name="table" value="Table 1 – 4 players" required>
                <span style="font-size:34px;">🐰</span>
                <div>
                    <strong>Table 1 – 4 players</strong><br>
                    Max 4 players • Standard
                </div>
            </div>

            <div class="table-option" data-type="standard">
                <input type="radio" name="table" value="Table 2 – 6 players">
                <span style="font-size:34px;">🐰</span>
                <div>
                    <strong>Table 2 – 6 players</strong><br>
                    Max 6 players • Standard
                </div>
            </div>

            <div class="table-option" data-type="private">
                <input type="radio" name="table" value="Bunny Lounge – Private Room (8 players)">
                <span style="font-size:34px;">🛋️</span>
                <div>
                    <strong>Bunny Lounge – Private Room (8 players)</strong><br>
                    Max 8 players • Private
                </div>
            </div>
        </div>

        <div id="recommended" style="margin-top:25px; padding:20px; background:#f5e8d3; border-radius:10px; display:none;">
            <strong>🎲 Recommended Games for this table size</strong>
            <div id="gamesList" style="margin-top:12px; line-height:1.8;"></div>
        </div>

        <div style="margin-top:40px;">
            <button type="submit" style="background:#d68a7e; color:white; padding:14px 40px; border:none; border-radius:8px; font-size:18px; cursor:pointer;">
                Reserve Now
            </button>
            <button type="button" onclick="clearForm()" style="background:#f5d0c5; padding:14px 30px; border:none; border-radius:8px; cursor:pointer;">
                Clear
            </button>
        </div>
    </form>
</div>

<script>
    const recommendedGames = {
        4: ["Codenames", "Ticket to Ride", "Splendor", "Love Letter"],
        6: ["Catan", "Wingspan", "Carcassonne", "Azul"],
        8: ["Dungeons & Dragons", "Bang!", "The Resistance", "Secret Hitler"]
    };

    function filterTables(type) {
        document.querySelectorAll('#tableList .table-option').forEach(item => {
            if (type === 'all') {
                item.style.display = 'flex';
            } else {
                item.style.display = (item.dataset.type === type) ? 'flex' : 'none';
            }
        });
    }

    document.querySelectorAll('input[name="table"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const maxPlayers = this.value.includes("4 players") ? 4 : 
                               this.value.includes("6 players") ? 6 : 8;
            
            const listHTML = recommendedGames[maxPlayers].map(game => 
                `<div style="margin:6px 0;">• ${game}</div>`
            ).join('');
            
            document.getElementById('gamesList').innerHTML = listHTML;
            document.getElementById('recommended').style.display = 'block';
        });
    });

    function clearForm() {
        document.querySelector('form').reset();
        document.getElementById('recommended').style.display = 'none';
        filterTables('all');
    }

    window.onload = () => filterTables('all');
</script>

<style>
    .table-option { 
        padding: 15px; border: 1px solid #ddd; margin:12px 0; border-radius:10px; 
        display: flex; align-items: center; gap: 15px; cursor: pointer;
    }
    .filter-btn { 
        background: #e8b4b4; color: #5c4033; border: none; padding: 10px 18px; 
        margin-right: 8px; border-radius: 8px; cursor: pointer;
    }
</style>