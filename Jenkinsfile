pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                sh 'docker run --rm --volumes-from jenkins -w ${WORKSPACE} composer:2 install'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'docker run --rm --volumes-from jenkins -w ${WORKSPACE} php:8.2-cli bash -c "php artisan test"'
            }
        }
    }
}
