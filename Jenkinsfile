pipeline {
    agent any

    stages {
        stage('Init') {
            steps {
                echo 'Initializing..loading...'
                echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
                echo 'Running Unit Testing..'
            }
        }
         stage("composer_install") {
             steps {
                sh 'cd backend'
                sh 'composer install'
                sh 'vendor/bin/phpunit'
             }
         }
        stage('Build') {
            steps {
                echo 'Building..'
                echo 'Running docker build -t sntshk/cotu .'
            }
        }
        stage('Publish') {
            steps {
                echo 'Publishing..'
                echo 'Running docker push..'
            }
        }
        stage('Cleanup') {
            steps {
                echo 'Cleaning..'
                echo 'Running docker rmi..'
            }
        }
    }
}
