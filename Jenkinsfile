pipeline {
    agent any

    stages {

        stage('Install Dependencies') {
            steps {
                sh 'docker run --rm -v $PWD:/app -w /app composer:2 install'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker run --rm -v $PWD:/app -w /app php:8.2-cli bash -c "cd /app && php artisan test"'
            }
        }

    }
}
