pipeline {
    agent any

    stages {

        stage('Install Dependencies') {
            steps {
                sh 'composer install'
                sh 'npm install'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'php artisan test'
            }
        }

    }
}
