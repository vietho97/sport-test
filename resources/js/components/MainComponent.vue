<template>
    <div class="container my-4">
        <div class="container d-flex flex-row gap-2 mb-3">
            <button type="button" class="btn btn-secondary" @click="filterMatches('all')">Tất cả</button>
            <button type="button" class="btn btn-danger" @click="filterMatches('live')">
                <span class="me-1">🔴</span>Trực tiếp
            </button>
            <button type="button" class="btn btn-secondary" @click="filterMatches('finished')">Đã kết thúc</button>
            <button type="button" class="btn btn-secondary" @click="filterMatches('schedule')">Lịch thi đấu</button>
        </div>
        <table class="table table-bordered text-center align-middle">
            <tbody v-for="match in matchesFiltered" :key="match.id">
                <tr class="table-secondary" v-if="match.length > 0">
                    <td colspan="8" class="text-start">
                        <img :src="getImagePath(match[0]?.competition.logo)" :alt="match[0]?.competition.name"
                            style="width: 20px;">
                        {{ match[0]?.home_team.country.name }}: <strong>{{ match[0]?.competition.name }}</strong>
                    </td>
                </tr>
                <tr v-for="match_team in match" :key="match_team.id">
                    <td>{{ formatTime(match_team.match_time) }} <br> {{ formatDate(match_team.match_time) }}</td>
                    <td>{{ match_team.match_status }}</td>
                    <td>
                        {{ match_team.home_team.name }}
                        <div class="d-flex flex-row mb-1 justify-content-center gap-2">
                            <div style="width: 10px; height: 10px; background-color: yellow;"></div>
                            <div style="width: 10px; height: 10px; background-color: red;"></div>
                            <div style="width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent;
                            border-right: 10px solid greenyellow;"></div>
                        </div>
                        <div class="d-flex flex-row justify-content-center gap-2 text-sm">
                            <div>{{ match_team.home_scores.yellow_cards }}</div>
                            <div>{{ match_team.home_scores.red_cards }}</div>
                            <div>{{ match_team.home_scores.corners }}</div>
                        </div>
                    </td>
                    <td v-if="match_team.status_id <= 3 && match_team.status_id > 1">
                        <span class="vs-text">{{ match_team.home_scores.halftime_score }} - {{
                            match_team.away_scores.halftime_score
                            }}</span>
                    </td>
                    <td v-else-if="match_team.status_id === 4">
                        <span class="vs-text">{{ match_team.home_scores.regular_time_score }} - {{
                            match_team.away_scores.regular_time_score }}</span>
                    </td>
                    <td v-else-if="match_team.status_id === 7">
                        <span class="vs-text">{{ match_team.home_scores.penalty_score }} - {{
                            match_team.away_scores.penalty_score
                            }}</span>
                    </td>
                    <td v-else-if="match_team.status_id >= 5">
                        <span class="vs-text">{{ match_team.home_scores.overtime_score }} - {{
                            match_team.away_scores.overtime_score
                            }}</span>
                    </td>
                    <td v-else>-</td>
                    <td>
                        {{ match_team.away_team.name }}
                        <div class="d-flex flex-row mb-1 justify-content-center gap-2">
                            <div style="width: 10px; height: 10px; background-color: yellow;"></div>
                            <div style="width: 10px; height: 10px; background-color: red;"></div>
                            <div style="width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent;
                            border-right: 10px solid greenyellow;"></div>
                        </div>
                        <div class="d-flex flex-row justify-content-center gap-2 text-sm">
                            <div>{{ match_team.away_scores.yellow_cards }}</div>
                            <div>{{ match_team.away_scores.red_cards }}</div>
                            <div>{{ match_team.away_scores.corners }}</div>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'MainComponent',
    data() {
        return {
            matches: [],
            matchesFiltered: [],
        };
    },
    methods: {
        formatTime(timestamp) {
            const date = new Date(timestamp * 1000);
            return date.toLocaleTimeString('vn-VN', { hour: '2-digit', minute: '2-digit' });
        },
        formatDate(timestamp) {
            const date = new Date(timestamp * 1000);
            return date.toLocaleDateString('vn-VN');
        },
        getImagePath(logo) {
            return `/storage/images/${logo}`;
        },
        filterMatches(status) {
            if (status === 'all') {
                this.matchesFiltered = this.matches;
                console.log(this.matchesFiltered);
            } else {
                let filtered = {};
                for (const key in this.matches) {
                    let filter = this.matches[key].filter(match => {
                        if (status === 'live' && match.status_id > 1 && match.status_id < 8) {
                            return true;
                        } else if (status === 'finished' && match.status_id === 8) {
                            return true;
                        } else if (status === 'schedule' && match.status_id === 1) {
                            return true;
                        }
                    });
                    filtered[key] = filter;
                }
                this.matchesFiltered = filtered;
            }
        },
        getMatches() {
            axios.get('/api/matches').then(response => {
                this.matches = response.data;
                this.matchesFiltered = this.matches;
            });
        }
    },
    mounted() {
        this.getMatches();
    },
};
</script>
