<template>
    <div>
        <div class="panel-heading">Example Component</div>
        <div class="panel-body">
            <article v-for="article in articles">
                <h1>{{ article.title }}</h1>
                <div class="entry">
                    {{ article.content }}
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                articles: this.articles
            }
        },
        created() {
            window.axios.get('/articles')
                .then((response) => {
                    this.articles = response.data;
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response);
                    } else {
                        console.log('Error', error.message);
                    }
                    console.log(error.config);
                }
            );
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
