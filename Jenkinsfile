pipeline {
    agent any

    stages {

        stage('Clone Repo') {
            steps {
                git 'https://github.com/zakioussama/foodfunday.git'
            }
        }

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
