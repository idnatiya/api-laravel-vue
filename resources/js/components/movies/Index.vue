<template>
	<div>
		<h1>Movie Index</h1>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-primary" to="/create">Add new data</router-link>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="movie in movies" :key="movie.id">
							<td>{{ movie.title }}</td>
							<td>{{ movie.description }}</td>
							<td class="text-center">
								<router-link class="btn btn-success" :to="`/edit/${movie.id}`">Edit</router-link>
								<button class="btn btn-danger" v-on:click="deleteRow(movie.id)">Delete</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<strong>REQUEST LOGS</strong>
			</div>
			<div class="card-body">
				<table class="table table-sm table-bordered">
					<thead>
						<tr>
							<th>ROUTER</th>
							<th>METHOD</th>
							<th>BODY DATA</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="log in requestLogs" :key="log.id">
							<td>{{ log.router }}</td>
							<td>{{ log.method }}</td>
							<td><code>{{ log.body }}</code></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
	
	export default {
		data() {
			return {
				movies: [],
				requestLogs: []
			}
		},
		created() {
			this.load();
			this.loadLogs(); 
		}, 
		methods: {
			load() {
				axios.get(`${BASE_API_URL}/movies`)
					.then(response => {
						this.movies = response.data; 
					})
			},
			loadLogs() {
				axios.get(`${BASE_API_URL}/request-logs`)
					.then(response => {
						this.requestLogs = response.data
					})
			}, 
			deleteRow(id) {
				axios.delete(`${BASE_API_URL}/movies/${id}`)
					.then(response => {
						this.load(); 
						this.loadLogs(); 
					}); 
			}
		}
	}

</script>