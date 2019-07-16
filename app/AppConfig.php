<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AppConfig extends Model
{
    //This model will house the application default static settings and configurations

    /* ====================================
     *  App MISC Text
     * ====================================
     */
        // Main page title
        public static function mainPageTitle()
        {
            return 'Australia\'s Industry Priority Qualifications Reporting Tool';
        }


    /* ====================================
     *  FILTERS DETAILS
     * ====================================
     */

        // Industries
        public static function filterIndustries()
        {
            return [
                'Agriculture, Forestry and Fishing',
                'Mining',
                'Manufacturing',
                'Electricity, Gas, Water and Waste Services',
                'Construction',
                'Wholesale Trade',
                'Retail Trade',
                'Accommodation and Food Services',
                'Transport, Postal and Warehousing',
                'Information Media and Telecommunications',
                'Financial and Insurance Services',
                'Rental, Hiring and Real Estate Services',
                'Professional, Scientific and Technical Services',
                'Administrative and Support Services',
                'Public Administration and Safety',
                'Education and Training',
                'Health Care and Social Assistance',
                'Arts and Recreation Services',
                'Other Services'
            ];
        }

        // Employer size
        public static function filterEmployerSize()
        {
            return [
                'small'     =>'Small (1-19)',
                'medium'    =>'Medium (20-199)',
                'large'     =>'Large (200+)'
            ];
        }

        // Priority tier
        public static function filterPriorityTier()
        {
            return [
                't-Essential' => 'Essential',
                't-High' => 'High',
                't-Medium' => 'Medium',
                't-Low' => 'Low'
            ];
        }

        // Qualification type
        public static function filterQualificationType()
        {
            return [
                '0Q' => 'Training Package',
                '1Q' => 'Accredited Course',
                '2Q' => 'Skill Set'
            ];
        }


        // Allowed Sheet names
        public static function allowSheetNames()
        {
            return [
                'Industry Data',
                'State Data',
                'Summary Data',
                'Skills Priorities'
            ];
        }

        // Industry Data Excel Headings
        public static function excelIndustryHeadings()
        {
            return [
                'Code',
                'Qualification',
                'Priority',
                'Industry',
                'Qualification type',
//                'Employer size'
            ];
        }

        // State Data Excel Headings
        public static function excelStateHeadings()
        {
            return [
                'Code',
                'Qualification',
                'Priority',
                'Qualification type',
                'Employer size'
            ];
        }

        // Summary data excel headings
        public static function excelSummaryHeadings()
        {
            return [
                    'Industry',
                    'Survey responses',
                    'Employer',
                    'Government body',
                    'Non-government organisation',
                    'Registered training organisation',
                    'Enterprise training provider',
                    'Group training organisation',
                    'Skills service organisation',
                    'Individual',
                    'Trade union',
                    'Industry Association/Peak body',
                    'Statutory authority',
                    'Self-employed',
                    'Not for profit',
                    'School or University',
                    'Other',
                    'Small',
                    'Medium',
                    'Large'
            ];
        }

        // Summary data excel headings for mySQL
        // change made here will affect => IPQExcel->loadSummaryDataToDB
        public static function excelSummaryHeadingsMYSQL()
        {
            return [
                'employer'              => 'Employer',
                'enterprise_t_p'        => 'Enterprise training provider',
                'government_body'       => 'Government body',
                'group_t_o'             => 'Group training organisation',
                'individual'            => 'Individual',
                'industry_a_p_b'        => 'Industry association peak body',
                'non_gov_body'          => 'Non-government organisation',
                'registered_t_o'        => 'Registered training organisation',
                'skills_s_o'            => 'Skills service organisation',
                'statutory_authority'   => 'Statutory authority',
                'trade_union'           => 'Trade union',
                'self_employed'         => 'Self-employed',
                'not_for_profit'        => 'Not for profit',
                'school_or_university'  => 'School or University',
            ];
        }



        // Summary data excel headings colouring
        public static function summaryChartColouring()
        {
            return [  '#f1592c', '#f3724c', '#f58b6c',  '#f7a48c' ];
        }

        // Skills data excel headings
        public static function excelSkillsHeadings()
        {
            return [
                'Skill type',
                'Agriculture, Forestry and Fishing',
                'Mining',
                'Manufacturing',
                'Electricity, Gas, Water and Waste Services',
                'Construction',
                'Wholesale trade',
                'Retail trade',
                'Accommodation and food services',
                'Transport, Postal and Warehousing',
                'Information media and telecommunications',
                'Financial and insurance services',
                'Rental, Hiring and Real Estate Services',
                'Professional, Scientific and Technical Services',
                'Administrative and support services',
                'Public administration and safety',
                'Education and training',
                'Health care and social assistance',
                'Arts and recreation services',
                'Other services',
                'South australia'
            ];
        }

        // Skills data excel headings for mySQL
            public static function excelSkillsHeadingsMYSQL()
            {
                return [
                    'skills'        => 'Skill type',
                    'agriculture'   => 'Agriculture forestry and fishing',
                    'mining'        => 'Mining',
                    'manufacturing' => 'Manufacturing',
                    'electricity'   => 'Electricity gas water and waste services',
                    'construction'  => 'Construction',
                    'w_trade'       => 'Wholesale trade',
                    'r_trade'       => 'Retail trade',
                    'accommodation' => 'Accommodation and food services',
                    'transport'     => 'Transport postal and warehousing',
                    'ict'           => 'Information media and telecommunications',
                    'financial'     => 'Financial and insurance services',
                    'r_estate'      => 'Rental hiring and real estate services',
                    'professional'  => 'Professional scientific and technical services',
                    'admin'         => 'Administrative and support services',
                    'public'        => 'Public administration and safety',
                    'education'     => 'Education and training',
                    'health'        => 'Health care and social assistance',
                    'arts'          => 'Arts and recreation services',
                    'o_services'    => 'Other services',
                    'sa_state'      => 'South australia'
                ];
            }

            // Skills Data Excel Headings
            public static function skillsPriorityMYSQL()
            {
                return [
                    'agriculture'   => 'Agriculture, Forestry and Fishing',
                    'mining'        => 'Mining',
                    'manufacturing' => 'Manufacturing',
                    'electricity'   => 'Electricity, Gas, Water and Waste Services',
                    'construction'  => 'Construction',
                    'w_trade'       => 'Wholesale Trade',
                    'r_trade'       => 'Retail Trade',
                    'accommodation' => 'Accommodation and Food Services',
                    'transport'     => 'Transport, Postal and Warehousing',
                    'ict'           => 'Information Media and Telecommunications',
                    'financial'     => 'Financial and Insurance Services',
                    'r_estate'      => 'Rental, Hiring and Real Estate Services',
                    'professional'  => 'Professional, Scientific and Technical Services',
                    'admin'         => 'Administrative and Support Services',
                    'public'        => 'Public Administration and Safety',
                    'education'     => 'Education and Training',
                    'health'        => 'Health Care and Social Assistance',
                    'arts'          => 'Arts and Recreation Services',
                    'o_services'    => 'Other Services',
                    'sa_state'      => 'South Australia'
                ];
            }


        // Datatable config
        public static function mainTableColumnNames()
        {
            return [
                1 => 'qualification',
                0 => 'code',
                2 => 'priority',
            ];
        }

        // File upload location
        public static function fileUploadLocation()
        {
           return '/public/excels/';
        }

        // Excel file reading location
        public static function fileReadingLocation()
        {
            return '/app/public/excels/';
        }

    /* ====================================
    *  WDT FILTERS DETAILS
    * ====================================
    */

        // Allowed Sheet names
        public static function wdtAllowSheetNames()
        {
            return [
                'Skilling South Australia',
                'Regions',
                'Retention',
                'Recruitment',
                'Migration',
                'Skill demand',
                'Skills shortages',
                'Plans & projects',
                'Actions & strategies',
                'Industries',
                'Age-Gen-Educ-Employ',
                'Employment_timeseries',
                'Training activity_FoE',
                'Training activity_TP',
                'Qual completions',
                // TODO more imports
            ];
        }

        // Sheets that not require heading validation
        public static function wdtSheetsNoHeadingValidation()
        {
            return [
                'Age-Gen-Educ-Employ',
                'Employment_timeseries',
                'Training activity_FoE',
                'Training activity_TP',
                'Qual completions',
                // TODO more imports
            ];
        }

        // Skilling SA data excel headings
        public static function excelSkillingSaHeadings()
        {
            return [
                'Project',
                'Status',
                'Industry',
            ];
        }

        // Regions data excel headings
        public static function excelRegionsHeadings()
        {
            return [
                'Region',
            ];
        }

        // Retention data excel headings
        public static function excelRetentionHeadings()
        {
            return [
                'Occupation/Job Title',
                'Region',
                'Industry',
                'Type',
            ];
        }

        // Recruitment data excel headings
        public static function excelRecruitmentHeadings()
        {
            return [
                'Occupation/Job Title',
                'Region',
                'Industry',
                'Type',
            ];
        }

        // Recruitment data excel headings
        public static function excelMigrationHeadings()
        {
            return [
                'Occupation/Job Title',
                'Region',
                'Industry',
            ];
        }

        // Skill Demand data excel headings
        public static function excelSkillDemandHeadings()
        {
            return [
                'Occupation/Job Title',
                'Region',
                'Industry',
                'Type',
            ];
        }

        // Skills Shortages data excel headings
        public static function excelSkillsShortagesHeadings()
        {
            return [
                'Occupation/Job Title',
                'Region',
                'Industry',
                'Type',
            ];
        }

        // Plans and Projects data excel headings
        public static function excelPlansAndProjectsHeadings()
        {
            return [
                'Project',
                'Status',
                'Region',
                'Industry',
            ];
        }

        // Actions and Strategies data excel headings
        public static function excelActionsAndStrategiesHeadings()
        {
            return [
                'Strategies and Actions',
                'Status',
                'Responsibility',
                'Industry',
            ];
        }

        // Division data excel headings
        public static function excelDivisionsHeadings()
        {
            return [
                'Divisions',
                'Sub-Divisions',
            ];
        }

    // TODO more imports

        // File upload location
        public static function wdtFileUploadLocation()
        {
            return '/public/excels/wdt/';
        }

        // Excel file reading location
        public static function wdtFileReadingLocation()
        {
            return '/app/public/excels/wdt/';
        }

        // Datatable config
        public static function skillShortagesTableColumnNames()
        {
            return [
                0 => 'occupation',
                1 => 'type',
                2 => 'region',
            ];
        }

        public static function trainingFOETableColumnNames()
        {
            return [
                0 => "f_e_o",
                1 => "advanced_diploma",
                2 => "diploma",
                3 => "certificate_IV",
                4 => "certificate_III",
                5 => "certificate_II",
                6 => "certificate_I",
                7 => "total",
            ];
        }

        public static function trainingTPTableColumnNames()
        {
            return [
                0 => "t_package",
                1 => "advanced_diploma",
                2 => "diploma",
                3 => "certificate_IV",
                4 => "certificate_III",
                5 => "certificate_II",
                6 => "certificate_I",
            ];
        }

        public static function trainingQCTableColumnNames()
        {
            return [
                0 => "qualification",
                1 => "1styear",
                2 => "2ndyear",
                3 => "3rdyear",
                4 => "4thyear",
                5 => "5thyear",
                6 => "collection",
            ];
        }

        public static function skillDemandTableColumnNames()
        {
            return [
                0 => 'occupation',
                1 => 'type',
                2 => 'region',
            ];
        }

        public static function recruitmentTableColumnNames()
        {
            return [
                0 => 'occupation',
                1 => 'region',
                2 => 'industry',
                3 => 'type',
            ];
        }

        public static function retentionTableColumnNames()
        {
            return [
                0 => 'occupation',
                1 => 'region',
                2 => 'industry',
                3 => 'type',
            ];
        }

        public static function skilledMigrationTableColumnNames()
        {
            return [
                0 => 'occupation',
                1 => 'region',
                2 => 'industry',
            ];
        }

        public static function plansAndProjectsTableColumnNames()
        {
            return [
                0 => 'project',
                1 => 'status',
                2 => 'region',
                3 => 'industry',
            ];
        }

        public static function skillingSaTableColumnNames()
        {
            return [
                0 => 'project',
                1 => 'status',
                2 => 'industry',
            ];
        }

        public static function actionsAndStrategiesTableColumnNames()
        {
            return [
                0 => 'strategies_and_actions',
                1 => 'status',
                2 => 'responsibility',
                3 => 'industry',
            ];
        }

        // More Info storing location
        public static function articleLocation()
        {
            return '/public/articles/';
        }
}
