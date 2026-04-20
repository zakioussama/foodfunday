pipeline {
    agent any
    stages {
        stage('Install Dependencies') {
            steps {
                sh 'docker run --rm --volumes-from jenkins -w ${WORKSPACE} foodfunday-ci composer install --no-interaction --prefer-dist'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'docker run --rm --volumes-from jenkins -w ${WORKSPACE} foodfunday-ci bash -c "cp .env.example .env && php artisan key:generate && php artisan test"'
            }
        }
        stage('Deploy') {
            steps {
                sh 'ansible-playbook -i ${WORKSPACE}/inventory.ini ${WORKSPACE}/deploy.yml'
            }
        }
    }
}
